<?php

namespace App;

class Voiture extends Vehicule implements Article 
{
    protected int $nbKm;
    protected int $dateCration;

    protected function caclUsure(): int
    {
        return $this->$nbKm * (date("Y")-$dateCreation);
    }
    public function givePop(): bool
    {
        if($this->dateCreation>2010){
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

    //public function __construct(int $nbKm, int $dateCreation, string $name, int $prix): void {}
}