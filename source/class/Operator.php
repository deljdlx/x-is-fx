<?php

namespace XIsFx;

class Operator extends Construction
{
    public function __construct($name, $parent)
    {
        parent::__construct($name, $parent);
        $this->name = $name;
    }
}


