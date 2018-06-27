<?php

require_once "Engine.php";

class Car{

    public const COLORS = ["black", "red", "blue"];

    private $color;
    private $engine;

    public function __construct(){
        $this->engine = new Engine();
    }

    public function setColor($color){
        foreach(self::COLORS as $val){
            if($color === $val){
                $this->color = $color;
                return true;
            }
        }

        return false;
    }

    public function getColor(){
        return $this->color;
    }

    public function turnOn(){
        return $this->engine->turnOn();
    }

    public function turnOff(){
        return $this->engine->turnOff();
    }
}
