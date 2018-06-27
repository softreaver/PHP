<?php

class ColorStock {

    private $colors = [];

    public function addColor($color) : ColorStock {
        if(!in_array($color, $this->colors)){
            $this->colors[] = $color;
        }
        
        return $this;
    }

    /**
     * Get the value of color
     */ 
    public function getColors()
    {
        return $this->colors;
    }

    public function getColor($color) {
        $filteredArray = array_filter($this->colors, function ($elem) use (&$color){
            return $color === get_class($elem);
        });

        return array_shift($filteredArray);
    }

    public function getColorByName(string $colorName) : ?ColorInterface{
        foreach($this->colors as $color) {
            if(strtolower($colorName) === strtolower($color->getName()))
                return $color;
        }

        return null;
    }

    public function getColorByHexaCode(string $colorCode) : ?ColorInterface{
        foreach($this->colors as $color) {
            if($colorCode === $color->getHexaCode())
                return $color;
        }

        return null;
    }

    public function removeColor($color) : ColorStock{
        if(in_array($color, $this->colors)){

            unset($this->colors[array_search($color, $this->colors)]);
        }

        return $this;
    }

    public function getColorCount() : int{
        return count($this->colors);
    }

    public function getKeys(){
        return array_keys($this->colors);
    }
}
