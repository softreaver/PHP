<?php
namespace PizzaFactory;

class Pizza
{

    private $nom;
    private $type;
    private $pate;
    private $sauce;
    private $ingredients = [];

    public function addIngredient($ingredient)
    {
        if (!in_array($ingredient, $ingredients)) {
            $this->ingredients[] = $ingredient;
        }

    }

    public function removeIngredient()
    {

    }

    public function getIngredients()
    {
        return $this->ingredients;
    }

    public function setPate($pate)
    {
        $this->pate = $pate;
    }

    public function getPate()
    {
        return $this->pate;
    }

    public function setSauce($sauce)
    {
        $this->sauce = $sauce;
    }

    public function getSauce()
    {
        return $this->sauce;
    }
}
