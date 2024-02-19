<?php

//$a == $b ,sama dengan (menyamakan value)
//$a === $b ,Identik(tidak menyamakan value)
//$a != $b ,tidak sama dengan
//$a !=== $b ,tidak Identik(tidak menyamakan value)

$a = "10";
$b = 10;
$c = $a == $b;

var_dump($c); //true
echo $c;

echo "\n";
echo "\n";

$c = $a === $b;
var_dump($c); //false
echo $c;

$a = 10;
$b = $a++;

var_dump($a);
var_dump($b);
