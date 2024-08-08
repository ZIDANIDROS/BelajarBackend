<?php

require_once 'namespace/test.php';

echo " " . PHP_EOL;

$nsp1 = new \data\one\test("zidan", "pasuruan", "indonesia");
$nsp1->sayHello1('tayo');
$nsp1->sayHello2('bus');

echo " " . PHP_EOL;

$nsp2 = new \data\two\test("husein", "malang", "indonesia");
$nsp2->sayHello1('tayo');
$nsp2->sayHello2('bus');
