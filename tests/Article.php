<?php

namespace Tests;

use App\Article;

class ArtcileTest extends TestCase
{
    /** @test */
    public function donner_nom_complet_voiture()
    {
        //(int $dateCreation, int $nbKm, string $nameMarque, string $name, int $prix )
        $voiture = new Voiture(2012,30000,"Fiat","Multiplat", 5000 );
        $this->assertEquals("Fiat-Multiplat", $voiture->giveName());
    }
     /** @test */
     public function donner_nom_complet_utilitaire()
     {
         //(int $dateCreation, int $nbKm, string $nameMarque, string $name, int $prix )
         $voiture = new Voiture(2012,30000,"Proshe","Kangoo", 5000 );
         $this->assertEquals("Proshe-Kangoo", $voiture->giveName());
     }
     public function donner_nom_complet_sapin()
     {
         //(string $name)
         $sapin = new Sapin("oui");
         $this->assertEquals("oui", $sapin->giveName());
     }

}