<?php

require_once "data/Person.php";

$person = new Person;
$person->name = "Husein Zidan";
$person->gender = "male";
$person->country = "Indonesia";

var_dump($person);

echo "Name    : {$person->name}" . PHP_EOL;
echo "gender  : {$person->gender}" . PHP_EOL;
echo "country : {$person->country}" . PHP_EOL;

$person2 = new Person;
$person2->name = "Adi";
$person2->gender = "male";
$person2->country = "Indonesia";
var_dump($person2);
