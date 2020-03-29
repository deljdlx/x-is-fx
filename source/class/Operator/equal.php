<?php

namespace XIsFx\Operator;


use XIsFx\Operator;

class equal extends Operator
{
    public function render()
    {
        if(count($this->parameters) > 1) {
            $buffer = '={'.implode(',', $this->parameters). '}';
        }
        else {
            $buffer = '= '.implode(',', $this->parameters);
        }

        if(!empty($this->children)) {
            $buffer .= ' '.$this->children[0]->render();
        }
        return $buffer;
    }
}

