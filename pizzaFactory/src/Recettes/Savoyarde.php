<?php
namespace PizzaFactory\Recettes;

class Savoyarde implements RecetteInterface
{
    private function __construct()
    {
        parent::__construct("Savoyarde", "normale", new Creme(), [
            new Oignon(),
            new Champignon(),
            new Emmentale(),
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
