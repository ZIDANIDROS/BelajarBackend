<?php

require_once "data/Animal.php";
require_once "data/AnimalShelter.php";

$catShelter = new \Data\CatShelter();
$cat = $catShelter->adopt("Tayo");
var_dump($cat);

$dogtShelter = new \Data\DogShelter();
$dog = $dogtShelter->adopt("Busa");
var_dump($dog);
