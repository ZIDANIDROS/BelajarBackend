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

sayHello("Husein", "strtoupper");
sayHello(" Zidan", "strtolower");
