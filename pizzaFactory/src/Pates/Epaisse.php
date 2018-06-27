<?php
namespace PizzaFactory\Pates;

class Epaisse implements PateInterface
{
    private const NOM = "Epaisse";

    public function getNom()
    {
        return $this->NOM;
    }
}
