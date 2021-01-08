<?php

namespace App;

class Sapin
{
    public String $name;
    protected int $prix;

    public function __construct(string $name)
    {
        $this->name = $name;
    }
}