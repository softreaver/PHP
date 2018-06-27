<?php
namespace PizzaFactory\Ingredients\Crudites;

class Champignon implements IngredientInterface
{
    private const NOM = "Champignon de paris";

    public function getNom()
    {
        return $this->NOM;
    }
}
