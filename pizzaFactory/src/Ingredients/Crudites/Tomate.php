<?php
namespace PizzaFactory\Ingredients\Crudites;

class Tomate implements IngredientInterface
{
    private const NOM = "Tomate";

    public function getNom()
    {
        return $this->NOM;
    }
}
