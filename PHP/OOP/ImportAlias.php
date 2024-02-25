<?php

require_once "data/conflict.php";

use data\one\Conflict as Conflict1;
use data\two\Conflict as Conflict2;
use function Helper\helpMe as help;
use const Helper\APPLICATION as app;

$conflict1 = new Conflict1();
$conflict2 = new Conflict2();

help();

echo app . PHP_EOL;
