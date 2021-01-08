<?php

namespace Tests;

use App\Sapin;

class SapinTest extends TestCase
{
    /** @test */
    public function pouvoire_creer_Sapin()
    {
        //(string $name)
        $sapin = new Sapin('oui');
        $this->assertEquals("oui", $sapin->name);
    }
}
