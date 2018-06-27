<?php
namespace PizzaFactory\Sauces;

class Creme implements SauceInterface
{
    private const NOM = "Crème";

    public function getNom()
    {
        return $this->NOM;
    }
}
