<?php

require_once "data/Car.php";

// with constructor
// $tesla = new Car("Model 3", "Blue");

// create object instance from class Car
$tesla = new Car();
// $tesla->type = "Model 3";
// $tesla->paint = "Red";
// $tesla->tire = "Yokohama Tires";

$tesla->detailEngine("Model S");
