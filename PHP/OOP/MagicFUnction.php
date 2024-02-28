<?php

require_once "data/Student.php";

$student1 = new Student();
$student1->id = "1";
$student1->name = "Husein";
$student1->value = 100;

//magicalFunction "__toString"
$string = (string) $student1;
echo $string . PHP_EOL;

//magicalFunction "__invoke"
$student1(1, "Husein", true, "Manusia");

//magicalFunction "__debugInfo"
var_dump($student1);
