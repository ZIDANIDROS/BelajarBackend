<?php

//merubah nama variable function menjadi value string
function foo()
{
    echo "Foo\n";
}

$merubahNAmaVariableFunction = "foo";
$merubahNAmaVariableFunction();

function sayHello(string $name, $filter)
{
    $finalName = $filter($name);
    echo "Hello $finalName" . PHP_EOL;
}

function sampleFunction(string $name): string
{
    return "Sample $name";
}

sayHello("Husein", "sampleFunction");

sayHello("Husein", "strtoupper");
sayHello(" Zidan", "strtolower");
