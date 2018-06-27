<?php
namespace PizzaFactory\Recettes;

class Calzone implements RecetteInterface
{
    private function __construct()
    {
        parent::__construct("Calzone", "normale", new Bolognaise(), [
            new Oignon(),
            new Champignon(),
            new Boeuf(),
        ]);
    }

    public static function getInstance()
    {
        return new Calzone();
    }

    public function getIngredients()
    {
        return $this->listeIngredients;
    }

    public function getSauce()
    {
        return $this->sauce;
    }

    public function getType()
    {
        return $this->type;
    }

    public function getPate()
    {
        return $this->pate;
    }
}
