<?php

require_once "data/Book.php";

$category = new Category();
$category->setName("$100 Startup");
$category->setAvailable(true);

$category->setName("              ");
echo "Name : {$category->getName()}" . PHP_EOL;
echo "Available : {$category->isAvailable()}" . PHP_EOL;
