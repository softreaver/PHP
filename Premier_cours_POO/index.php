<?php

include "Car.php";

$car = new Car();


if($car->setColor("black")){
    echo $car->getColor();
}else{
    echo "erreur!";
}
echo "<br/>";

echo $car->turnOn();
echo "<br/>";

echo $car->turnOff();
echo "<br/>";
