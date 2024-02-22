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

//mengakses variable dari luar
$firstName = "Husein";
$lastName = "Zidan";

#menggunakan "use" karena ingin mengakses variable dari luar
$sayHelloHusein = function () use ($firstName, $lastName) {
    echo "Hello $firstName $lastName" . PHP_EOL;
};
$sayHelloHusein();
