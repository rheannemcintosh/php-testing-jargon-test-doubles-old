<?php

namespace App;

class User
{
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }
}