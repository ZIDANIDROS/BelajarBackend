<?php

require "data/SayGoodBye.php";

use Data\traits\{Person, SayHello, SayGoodBye};

$person = new Person();
$person->goodBye("Husein");
$person->hello("Husein");

$person->name = "Husein";
var_dump($person);
