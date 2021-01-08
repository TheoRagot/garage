<?php

namespace Tests;

use App\Vehicule;
use App\Voiture;
use App\Utilitaire;

class VehiculeTest extends TestCase
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
    public function pourvoir_donner_populariter_voiture()
    {
        $voiture = new Voiture(2012,30000,"Fiat","Multiplat", 5000 );
        $this->assertEquals(true, $voiture->givePop());
        $voiture = new Voiture(1922,30000,"Fiat","Multiplat", 5000 );
        $this->assertEquals(false, $voiture->givePop());
    }
    public function pourvoir_donner_populariter_Utilitaire()
    {
        $utilitaire = new Utilitaire(14,30000,"Fiat","Multiplat", 5000 );
        $this->assertEquals(true, $Utilitaire->givePopularity());
        $utilitaire = new Utilitaire(2,30000,"Fiat","Multiplat", 5000 );
        $this->assertEquals(false, $Utilitaire->givePopularity());
    }

}