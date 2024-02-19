<?php
//menggabungkan 2 buah array
$first = [
    "first name" => "eko"
];

$second = [
    "first name" => "eko", //di ignore karena sudah ada di first, berlaku jika di gabung
    "second name" => "tayo"
];

$full = $first + $second;
var_dump($full);
foreach ($full as $fullz => $value) {
    echo $fullz . ": " . $value . "\n";
}

//perbandingan array
$a = [
    "first name" => "eko",
    "second name" => "tayo"
];

$b = [
    "first name" => "eko",
    "second name" => "tayo"
];

var_dump($a == $b);
echo $a == $b;
