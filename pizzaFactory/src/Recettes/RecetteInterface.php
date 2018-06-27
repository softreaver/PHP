<?php
namespace PizzaFactory\Recettes;

abstract class RecetteInterface
{
    protected $nom;
    protected $type;
    protected $sauce;
    protected $listeIngredients = [];

    private function __construct($nom, $type, $sauce, $listeIngredients)
    {
        $this->nom = $nom;
        $this->$type = $type;
        $this->sauce = $sauce;
        $this->listeIngredients = $listeIngredients;
    }
    abstract public static function getInstance();
    abstract public function getIngredients();
    abstract public function getSauce();
    abstract public function getType();
    abstract public function getPate();
}
