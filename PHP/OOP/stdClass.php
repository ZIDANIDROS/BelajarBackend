<?php

//merubah array menjadi objek
$array = [
    "firstName" => "Husein",
    "middleName" => "Zidan",
    "lastName" => "Alaydrus"
];

$object = (object)$array;

var_dump($object);

echo "first Name $object->firstName" . PHP_EOL;
echo "middle Name $object->middleName" . PHP_EOL;
echo "last Name $object->lastName" . PHP_EOL;

//merubah objek menjadi array
require_once "data/Person.php";

$person = new Person("Husein", "Pasuruan");
var_dump($person);

$arrayPerson = (array) $person;
var_dump($arrayPerson);
