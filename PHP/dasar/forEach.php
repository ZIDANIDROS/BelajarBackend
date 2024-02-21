<?php

$names = ["Husein", "Zidan", "Alaydrus"];

for ($i = 0; $i < count($names); $i++) {
    echo "Hello mas $names[$i]" . PHP_EOL;
}

foreach ($names as $name) {
    echo "Hello $name" . PHP_EOL;
}
