<?php

require_once "data/Food.php";
require_once "data/Animal.php";
require_once "data/AnimalShelter.php";

$catShelter = new \Data\CatShelter();
$cat = $catShelter->adopt("Tayo");
$cat->eat(new \Data\AnimalFood());

$dogtShelter = new \Data\DogShelter();
$dog = $dogtShelter->adopt("Busa");
$dog->eat(new \Data\Food());
