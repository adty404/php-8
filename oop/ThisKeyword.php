<?php

require_once "data/Car.php";

// with constructor
// $tesla = new Car("Model 3", "Blue");

// create object instance from class Car
$tesla = new Car();
$tesla->type = "Model 3";
$tesla->detailEngine("Model S");

echo PHP_EOL;

$ferrari = new Car();
$ferrari->type = "812 GTS";
$ferrari->detailEngine(null);
