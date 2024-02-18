<?php

$names = ["Husein", "Zidan", "uewu", 1, 2, 3];

var_dump($names[3]);

$names[0] = "Tayo";
var_dump($names);

unset($names[1]);
var_dump($names);

$names[] = "joko";
var_dump($names);

var_dump(count($names));

//Membuat Map di array php
echo "-----------------Membuat Map di array php--------------------\n";
$husein = array(
    "Name" => "Husein",
    "Name call" => "Zidan",
    "age" => 30
);

var_dump($husein); //memanggil semua

var_dump($husein['Name call']);

//Array didalam Array
echo "\n-----------------array dalam array--------------------\n";
$arrayDidalamArray = array(
    "Name" => "Husein",
    "Name call" => "Zidan",
    "age" => 30,
    "addres" => array(
        "City" => "Pasuruan",
        "no" => 52,
        "rw" => 3,
        "rt" => 5
    )
);

var_dump($arrayDidalamArray);
var_dump($arrayDidalamArray["addres"]["City"]);
var_dump($arrayDidalamArray["addres"]["City"]);
