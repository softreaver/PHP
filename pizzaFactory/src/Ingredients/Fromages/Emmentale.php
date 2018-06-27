<?php
namespace PizzaFactory\Ingredients\Fromages;

class Emmentale implements IngredientInterface
{
    private const NOM = "Emmentale";

    public function getNom()
    {
        return $this->NOM;
    }
}
