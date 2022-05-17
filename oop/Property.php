<?php

require_once "data/Car.php";

// with constructor
// $tesla = new Car("Model 3", "Blue");

// create object instance from class Car
$tesla = new Car("Model 3", "Red");
$tesla->type = "Model 3";
$tesla->paint = "Red";
$tesla->tire = "Yokohama Tires";

// $tesla->type = "Model 3";
// $tesla->paint = "Red";
// $tesla->tire = 4;

var_dump($tesla);
