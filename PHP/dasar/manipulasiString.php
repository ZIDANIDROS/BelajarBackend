<?php

//dot operator
$name = "Husein Zidan";
echo "nama  : " . $name . PHP_EOL;
echo "nilai : " . 100 . "\n\n";

//konfersi number ke string atau sebaliknya
$valueString = (string)100;
var_dump($valueString);

$valueInt = (int)"100";
var_dump($valueInt);

$valueFloat = (float)"100.10";
var_dump($valueFloat);
echo "\n";

//mengakses karakter
$name = "HUSEIN";
echo $name[0] . PHP_EOL;
echo $name[1] . PHP_EOL;
echo $name[2] . PHP_EOL;
echo $name[3] . PHP_EOL;
echo $name[4] . PHP_EOL;
echo $name[5] . PHP_EOL;
echo PHP_EOL;

//variable Parsing
echo "Hello $name, selamat belajar " . PHP_EOL;

//curly brace
echo "{$name}'s book " . PHP_EOL;//ingin menambahkan value variable di samping variable