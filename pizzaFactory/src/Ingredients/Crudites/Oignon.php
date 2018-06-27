<?php
namespace PizzaFactory\Ingredients\Crudites;

class Oignon implements IngredientInterface
{
    private const NOM = "Oignon";

    public function getNom()
    {
        return $this->NOM;
    }
}
