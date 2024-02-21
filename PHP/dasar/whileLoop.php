<?php

$counter = 1;

while ($counter <= 10) {
    echo "Hello world : $counter\n";
    $counter++;
}

echo "\n";
$counter2 = 1;
do {
    echo "Hello world : $counter2\n";
    $counter2++;
} while ($counter2 <= 10);

echo "\n";
for ($i = 0; $i < 100; $i++) {
    if ($i % 2 == 0) {
        continue;
    }
    echo "Hello World : " . $i . PHP_EOL;
}
