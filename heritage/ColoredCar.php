<?php

class ColoredCar {
    private $colorList = [];

    public function __construct() {
        $this->colorList[] = new Red();
        $this->colorList[] = new Green();
        $this->colorList[] = new Black();
    }

    public function getColorInfo($index) : ?string {
        if(isset($this->colorList[$index]))
            return $this->colorList[$index]->getHexaCode();
        else
            return null;
    }
}

