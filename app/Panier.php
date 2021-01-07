<?php

namespace App;

class Panier
{
    public array $prix;
    protected array $article;

    protected function giveFacture(): array
    {
        return array([implode($article),array_sum($somme) ]);
    }
}
