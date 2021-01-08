<?php

namespace App;

class Voiture extends Vehicule implements Article 
{
    public int $nbKm;
    public int $dateCreation;
    public int $usure = 0;

    public function caclUsure(): int
    {
        return $usure =$this->nbKm * (date("Y")-$this->dateCreation);
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
        return $this->prix / ($this->nbKm * (date("Y")-$this->dateCreation)) ;
    }
    public function giveName(): string {
        return $this->nameMarque ."-"  .$this->name ;
    }

    public function __construct(int $dateCreation, int $nbKm, string $nameMarque, string $name, int $prix )
    {
        $this->name = $name;
        $this->dateCreation = $dateCreation;
        $this->nbKm = $nbKm;
        $this->nameMarque = $nameMarque;
        $this->name = $name;
        $this->prix = $prix;
    }
}