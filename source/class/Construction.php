<?php

namespace XIsFx;


class Construction
{
    public function __construct($name = null, $parent = null)
    {
        $this->childrenByName = [];
        $this->children = [];
        $this->name = $name;
        $this->parent = $parent;

    }

    public function  __get($name)
    {
        if(array_key_exists($name, $this->childrenByName)) {
            return $this->childrenByName[$name];
        }

        $contruction = new Construction($name, $this);
        $this->childrenByName[$name] = $contruction;
        $this->children[] = $contruction;

        return $contruction;
    }

    public function __call($methodName, $parameters)
    {
        $operator = new Operator($methodName, $this);
        $this->childrenByName[$methodName] = $operator;
        $this->children[] = $operator;
        return $operator;
    }




    public function render()
    {
        $buffer = $this->name;
        if(!empty($this->children)) {
            $buffer .= ' '.$this->children[0]->render();
        }
        return $buffer;
    }

    public function back()
    {
        return $this->parent;
    }
}
