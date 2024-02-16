<?php

$names = ["Husein", "Zidan", "uewu" ,1,2,3];

var_dump($names[3]);

$names[0] = "Tayo";
var_dump($names);

unset($names[1]);
var_dump($names);

$names[] = "joko";
var_dump($names);

var_dump(count($names));

//Membuat Map di array php

$husein = array(
    "Husein",
    "Zidan",
    30
);