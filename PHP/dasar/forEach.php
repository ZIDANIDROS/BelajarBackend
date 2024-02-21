<?php

$names = ["Husein", "Zidan", "Alaydrus"];

for ($i = 0; $i < count($names); $i++) {
    echo "Hello mas $names[$i]" . PHP_EOL;
}
echo "\n";

//foreach tidak butuh index
foreach ($names as $name) {
    echo "Hello $name" . PHP_EOL;
}
echo "\n";

$person = [
    "First name" => "Husein",
    "middle name" => "Zidan",
    "last name" => "alaydrus"
];

//foreach tidak butuh index
foreach ($person as $key => $lawak) {
    echo "$key : $lawak" . PHP_EOL;
}
echo "\n";

foreach ($names as $index => $name) {
    echo "Hello $name index ke-$index" . PHP_EOL;
}
echo "\n";
