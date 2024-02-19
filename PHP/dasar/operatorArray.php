<?php

$first = [
    "first name" => "eko"
];

$second = [
    "second name" => "tayo"
];

$full = $first + $second;
var_dump($full);
foreach ($full as $fullz => $value) {
    echo $fullz . ": " . $value . "\n";
}
