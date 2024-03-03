<?php

//menggatikan switch case
$value = "A";
$result = match ($value) {
    "A", "B", "C" => "Anda lulus",
    "D" => "Anda tidak lulus",
    "E" => "Anda salah jurusan",
    default => "Anda salah jurusan"
};

echo $result;
