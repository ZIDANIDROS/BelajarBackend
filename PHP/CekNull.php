<?php

$name = "Husein";
$age = 15;

echo "Name : ";
echo $name;
echo "\n";
echo "Age : ";
echo $age;
echo "\n";

echo "\n";
echo"--------------";
echo "\n";

$name = null;
$age = null;

echo "Name : ";
echo $name;
echo "\n";
echo "Age : ";
echo $age;
echo "\n";
echo "\n";

echo "Is Name Null ? ";
echo is_null($name);
echo "\n";
echo "Is age Null ? ";
echo is_null($age);
echo "\n";
echo "\n";

//var_dump untuk menghilangkan angka 1 pada is_null

echo "Is Name Null ? ";
echo var_dump(is_null($name));
echo "Is age Null ? ";
echo var_dump(is_null($age));
echo "\n";

//unset

$contoh = "Husien";
unset($contoh);
// echo $contoh; error

var_dump(isset($contoh));

echo"feature2";