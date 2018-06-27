<?php

include "Timestamp.php";

class B extends A{

    use Timestamp;
    
    public $property2;

    public function methodC(){
        return __METHOD__;
    }

    public function methodD(){
        return $this->methodA();
    }

    public function methodE(){
        return $this->property1;
    }

    public function setProperty2($value) : B{
        $this->property2 = $value;
        return $this;
    }
}
