<?php
namespace PizzaFactory\Ingredients\Viandes;

class Boeuf implements IngredientInterface
{
    private const NOM = "Boeuf";

    public function getNom()
    {
        return $this->NOM;
    }
}
