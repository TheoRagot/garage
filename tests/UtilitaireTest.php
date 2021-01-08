<?php

namespace Tests;

use App\Utilitaire;

class UtilitaireTest extends TestCase
{
    /** @test */
    public function pouvoir_faire_une_Utilitaire()
    {
        //int $volume, int $nbKm, string $nameMarque, string $name, int $prix 
        $Utilitaire = new Utilitaire(14,30000,"Porshe","Kangoo", 5000 );
        $this->assertEquals('Kangoo', $Utilitaire->name);
        $this->assertEquals(14, $Utilitaire->volume);
        $this->assertEquals(5000, $Utilitaire->prix);
        $this->assertEquals(30000, $Utilitaire->nbKm);
        $this->assertEquals('Porshe', $Utilitaire->nameMarque);
    }
    /** @test */
    public function peut_donner_son_nom_complet()
    {
        $Utilitaire = new Utilitaire(14,30000,"Porshe","Kangoo", 2000 );
        $this->assertEquals("Porshe-Kangoo", $Utilitaire->giveName());
    }
    /** @test */
    public function peut_calculer_son_prix()
    {
        $Utilitaire = new Utilitaire(14,50,"Porshe","Kangoo", 2000 );
        //$this->prix + ($this->volume * 10);
        $this->assertEquals("2140", $Utilitaire->getTarif());
    }
}
