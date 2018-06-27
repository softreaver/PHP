<?php

include "ColorInterface.php";
include "Red.php";
include "Green.php";
include "Black.php";
include "ColorStock.php";

$colorStock = new ColorStock();

$colorStock->addColor(new Red());
$colorStock->addColor(new Red());
$colorStock->addColor(new Black());
$colorStock->addColor(new Green());

$colorStock->removeColor(new Green());

var_dump($colorStock->getColorCount());
var_dump($colorStock->getColor(Black::class));
var_dump($colorStock->getColor(Green::class));
var_dump($colorStock->getColor(Red::class));
var_dump($colorStock->getColorByName("red"));
