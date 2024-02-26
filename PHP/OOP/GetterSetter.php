<?php

require_once "data/Category.php";

$category = new Category();
$category->setName(" Handphone");
$category->setExpensive(true);

$category->setName("    ");

echo "name :{$category->getName()}" . PHP_EOL;
echo "Expansive :{$category->isExpensive()}" . PHP_EOL;
