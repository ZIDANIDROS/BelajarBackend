<?php

function sayHello(string $name, callable $filter)
{
    $finalName = call_user_func($filter, $name);
    echo "Hello $finalName" . PHP_EOL;
}

sayHello("Husein", function ($name) {
    return strtoupper($name);
});
sayHello("Husein", fn ($name) => strtoupper($name));
sayHello("Husein", "strtoupper");
sayHello("Husein", "strtolower");
