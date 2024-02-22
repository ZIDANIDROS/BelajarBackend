<?php

$sayHello = function (string $name) {
    echo "hello $name" . PHP_EOL;
};

$sayHello("Husein");
$sayHello("Zidan");

function sayGoodBye(string $name, $filter)
{
    $finalName = $filter($name);
    echo "Good bye $finalName" . PHP_EOL;
}

sayGoodBye("Husein", function (string $name): string {
    return strtoupper($name);
});
