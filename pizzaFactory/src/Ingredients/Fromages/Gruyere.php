<?php
namespace PizzaFactory\Ingredients\Fromages;

class Gruyere implements IngredientInterface
{
    private const NOM = "Gruyere";

    public function getNom()
    {
        return $this->NOM;
    }
}
