<?php

namespace XIsFx\Operator;


use XIsFx\Operator;

class Different extends Operator
{

    public function __construct($name, $parent)
    {
        parent::__construct('≠', $parent);
    }

}