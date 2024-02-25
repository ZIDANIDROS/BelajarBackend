<?php

require_once "data/conflict.php";
require_once "data/Helper.php";

$conflict1 = new data\one\Conflict();
$conflict2 = new data\two\Conflict();

echo Helper\APPLICATION . PHP_EOL;
Helper\helpMe();
