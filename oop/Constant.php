<?php

require_once "data/Car.php";

// before php 7.4 release
define("Application", "BuildWith Angga");

// after php 7.4 release
const APPLICATION = "BWA";

echo Application . PHP_EOL;
echo APPLICATION . PHP_EOL;;

echo Car::COURSE;
