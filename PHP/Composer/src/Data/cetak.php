<?php

require_once __DIR__ . '/../../vendor/autoload.php';
use huseinzidan\Data\People;

$person = new People("Husein");
echo $person->sayHello("Budi");
