<?php

require_once "data/Person.php";

$person = new Person;

$person->name = "Husein Zidan";
$person->gender = "male";
$person->country = "Indonesia";

echo "Name    : {$person->name}";
echo "gender  : {$person->gender}";
echo "country : {$person->country}";
