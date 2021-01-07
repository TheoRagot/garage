<?php

namespace App;

 abstract class Vehicule extends Marque 
{
    public string $name;
    public int $prix;

    abstract public function givePopularity(): bool ;
}