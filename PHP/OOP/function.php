<?php

require_once "data/Person.php";

$husein = new Person("Husein", "Male");
$husein->name = "Husein";
$husein->sayHello("Husein");

$husein->info();
