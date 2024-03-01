<?php

//di php 8 parameter bisa di bolak balik
function sayHello(string $first, string $middle, string $last): void
{
    echo "Hello $first $middle $last" . PHP_EOL;
}

sayHello(last: "Alaydrus", first: "Husein", middle: "Zidan");
