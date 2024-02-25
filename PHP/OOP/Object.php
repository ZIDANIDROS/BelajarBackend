<?php

require_once "data/Person.php";

$person = new Person;
$person->name = "Husein Zidan";
$person->gender = "male";
$person->country = "Indonesia";
$person->sayHello("Husein");
var_dump($person);
echo "\n\n";


$person2 = new Person;
$person2->name = "Moroko";
$person2->gender = "male";
$person2->country = "Indonesia";
$person2->sayHello(null);
var_dump($person2);
