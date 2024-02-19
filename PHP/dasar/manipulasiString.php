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
