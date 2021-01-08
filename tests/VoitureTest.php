<?php

namespace Tests;

use App\Voiture;

class VoitureTest extends TestCase
{
    /** @test */
    public function pouvoir_faire_une_voiture()
    {
        //(int $dateCreation, int $nbKm, string $nameMarque, string $name, int $prix )
        $voiture = new Voiture(2012,30000,"Fiat","Multiplat", 5000 );
        $this->assertEquals('Multiplat', $voiture->name);
        $this->assertEquals(2012, $voiture->dateCreation);
        $this->assertEquals(5000, $voiture->prix);
        $this->assertEquals(30000, $voiture->nbKm);
        $this->assertEquals('Fiat', $voiture->nameMarque);
    }
    /** @test */
    public function peut_donner_son_nom_complet()
    {
        $voiture = new Voiture(2012,30000,"Fiat","Multiplat", 2000 );
        $this->assertEquals("Fiat-Multiplat", $voiture->giveName());
    }
    /** @test */
    public function peut_calculer_son_usure()
    {
        $voiture = new Voiture(2012,30000,"Fiat","Multiplat", 2000 );
        $this->assertEquals("270000", $voiture->caclUsure());
    }
    /** @test */
    public function peut_calculer_son_prix()
    {
        $voiture = new Voiture(2011,50,"Fiat","Multiplat", 2000 );
        $this->assertEquals("4", $voiture->getTarif());
    }
}
