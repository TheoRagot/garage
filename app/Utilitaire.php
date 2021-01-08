<?php

namespace App;

class Utilitaire extends Vehicule implements Article 
{
    public int $nbKm;
    public int $volume;


    public function givePopularity(): bool
    {
        if($this->volume>11){
            return true;
        }else{
            return false;
        }
    }
    public function getTarif(): int {
        return $this->prix + ($this->volume * 10);
    }
    public function giveName(): string {
        return $this->nameMarque ."-"  .$this->name ;
    }

    public function __construct(int $volume, int $nbKm, string $nameMarque, string $name, int $prix )
    {
        $this->name = $name;
        $this->volume = $volume;
        $this->nbKm = $nbKm;
        $this->nameMarque = $nameMarque;
        $this->name = $name;
        $this->prix = $prix;
    }
}
