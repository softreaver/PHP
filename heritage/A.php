<?php

class A{
    public $property1;
    protected $pProtected = "protected";
    private $PPrivate = "private";

    public function methodA(){
        return __METHOD__;
    }

    public function methodB(){
        return __METHOD__;
    }

    public function getPPrivate() : string {
        return $this->PPrivate;
    }

    public function setProperty1($value) : A {
        $this->property1 = $value;
        return $this;
    }
}
