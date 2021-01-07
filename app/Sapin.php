<?php

namespace App;

class Sapin
{
    protected String $name;
    protected int $prix = 5;

    public function __construct(string $name)
    {
        $this->name = $name;
    }
}