<?php

require_once "Helper/MathHelper.php";

use Helper\MathHelper;

// $mathHelper = new MathHelper();
// echo $mathHelper->name . PHP_EOL;//error
echo MathHelper::$name . PHP_EOL;

MathHelper::$name = "Husein Zidan";
echo MathHelper::$name . PHP_EOL;

$result = MathHelper::sum(10, 10, 10, 10, 10);
echo "Result : $result" . PHP_EOL;
