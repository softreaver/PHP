<?php
namespace PizzaFactory\Ingredients\Viandes;

class Poulet implements IngredientInterface
{
    private const NOM = "Poulet";

    public function getNom()
    {
        return $this->NOM;
    }
}
