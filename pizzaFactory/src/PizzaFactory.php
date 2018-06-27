<?php
namespace PizzaFactory;

class PizzaFactory
{
    public function makePizza($recette)
    {
        $pizza = new Pizza();
        //Ajout des ingrédients
        foreach ($recette->getIngredients() as $ingredient) {
            $pizza->addIngredient($ingredient);
        }

        $pizza->setPate($recette->getPate());
        $pizza->setSauce($recette->getSauce());

        return $pizza;
    }
}
