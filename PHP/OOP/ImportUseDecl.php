<?php

require_once "data/conflict.php";

use data\one\{Conflict as Conflict1, Conflict as Conflict2};
//use data\two\Conflict as Conflict2; -berubah ke atas
use function Helper\helpMe as help;
use const Helper\APPLICATION as APP;

$conflict1 = new Conflict1();
$conflict2 = new Conflict2();

help();

echo APP . PHP_EOL;
