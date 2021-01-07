<?php

namespace App;

class Utilitaire extends Vehicule implements Article 
{
    protected int $nbKm;
    protected int $volume;

    public function givePop(): bool
    {
        if($this->volume>11){
            return true;
        }else{
            return false;
        }
    }
    public function givePopularity(): bool
    {
        return $this->givPop();
    }
    public function getTarif(): int {
        return $this->prix + ($this->volume * 10);
    }
    public function getTName(): int {
        return $this->name + $this->nameMarque ;
    }

    public function __construct(string $name)
    {
        $this->name = $name;
    }
}
