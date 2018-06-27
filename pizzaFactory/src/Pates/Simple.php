<?php
namespace PizzaFactory\Pates;

class Simple implements PateInterface
{
    private const NOM = "Simple";

    public function getNom()
    {
        return $this->NOM;
    }
}
