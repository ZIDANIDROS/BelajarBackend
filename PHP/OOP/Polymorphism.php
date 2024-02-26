<?php

require_once "data/Programmer.php";

$company = new Company();
$company->programmer = new Programmer("Husein");
var_dump($company);

$company->programmer = new backendProgrammer("Husein");
var_dump($company);

$company->programmer = new frontendProgrammer("Husein");
var_dump($company);
