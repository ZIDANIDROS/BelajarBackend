<?php

#default parameter
function sayHello($namas, $nama = "tayo",)
{
    echo "Hello $nama $namas" . PHP_EOL;
}

sayHello("bis");

//type declaration
function sum(int $first, int $last) # mengkomper value
{
    $total = $first + $last;
    echo "Total $first + $last = $total" . PHP_EOL;
}

sum("100", "90");

echo "\n";
//Variable lenght argument list
function sumAll(array $values)
{
    $total = 0;
    foreach ($values as $value) {
        $total += $value;
    }
    echo "Total " . implode(",", $values) . " = $total" . PHP_EOL;
}

sumAll([10, 20, 30]);

function sumAllCarasimple(...$values)
{
    $total = 0;
    foreach ($values as $value) {
        $total += $value;
    }
    echo "Total " . implode(",", $values) . " = $total" . PHP_EOL;
}

sumAllCarasimple(10, 20, 30); //akan di konversi menjadi array di parameter functionnya

echo "\n";

//return function
function sumA(int $a, int $b): int //guna ":int" adalah untuk merubah isi value menjadi int
{
    $total = $a + $b;
    return $total;
}

$result = sumA("10", "10");
var_dump($result);
