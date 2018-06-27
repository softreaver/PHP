<?php
namespace PizzaFactory\Ingredients\Crudites;

class SaladeVerte implements IngredientInterface
{
    private const NOM = "Salade verte";

    public function getNom()
    {
        return $this->NOM;
    }
}
