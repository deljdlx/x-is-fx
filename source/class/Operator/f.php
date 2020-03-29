<?php

namespace XIsFx\Operator;


use XIsFx\Operator;


class f extends Operator
{

    public function __construct($name, $parent)
    {
        parent::__construct('f', $parent);
    }

    public function render()
    {
        $buffer = 'f('.implode(',', $this->parameters).')';
        if(!empty($this->children)) {
            $buffer .= ' '.$this->children[0]->render();
        }
        return $buffer;
    }

}