<?php

//menggatikan switch case
$value = "A";
$result = match ($value) {
    "A", "B", "C" => "Anda lulus",
    "D" => "Anda tidak lulus",
    "E" => "Anda salah jurusan",
    default => "Anda salah jurusan"
};
echo $result . PHP_EOL;

//match expression non equals
$value = "A";
$result = match (true) {
    //  (kondisi) => outputnya
    $value >= 80 => "A",
    $value >= 70 => "B",
    $value >= 60 => "C",
    $value >= 50 => "D",
    default => "E"
};
echo "Nilai $value, $result" . PHP_EOL;

// match expression dengan kondisi
$name = "Mr. Husien";
$result = match (true) {
    str_contains($name, "Mr.") => "Hello Sir",
    str_contains($name, "Mrs.") => "Hello Mam",
    default => "Hello"
};
