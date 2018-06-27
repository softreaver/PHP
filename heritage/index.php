<?php
declare(strict_types=1);

include ("Red.php");
include ("Green.php");
include ("Black.php");
include ("ColoredCar.php");

$car = new ColoredCar();

echo $car->getColorInfo(0);
