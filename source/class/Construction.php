<?php

namespace XIsFx;


class Construction
{
    public function __construct($name = null, $parent = null)
    {
        $this->namespace = 'XIsFx';
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

        $className = $this->namespace.'\\term\\'.$name;
        if(class_exists($className)) {
            $contruction = new $className($name, $this);
        }
        else {
            $contruction = new Construction($name, $this);
        }

        $this->childrenByName[$name] = $contruction;
        $this->children[] = $contruction;

        return $contruction;
    }

    public function __call($methodName, $parameters)
    {
        $className = $this->namespace.'\\Operator\\'.$methodName;
        if(class_exists($className)) {
            $operator = new $className($methodName, $this);
        }
        else {
            $operator = new Operator($methodName, $this);
        }
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
