<?php

require_once "data/Transportation.php";

$airport = new Airport();
$airport->lion_air = new LionAir("CGK - LBJ");
var_dump($airport);

$airport->lion_air = new BatikAir("LBJ - SIN");
var_dump($airport);

$airport->lion_air = new WingsAir("LBJ - DPS");
var_dump($airport);

flightRoute(new LionAir("CGK - LCY"));
flightRoute(new BatikAir("LCY - AMS"));
flightRoute(new WingsAir("AMS - CGK"));