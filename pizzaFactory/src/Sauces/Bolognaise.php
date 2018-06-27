<?php
namespace PizzaFactory\Sauces;

class Bolognaise implements SauceInterface
{
    private const NOM = "Bolognaise";

    public function getNom()
    {
        return $this->NOM;
    }
}
