<?php

class Person
{
    var string $name;
    var ?string $gender = null; //nulable = bisa/noleh null
    var string $country;

    function sayHello(string $name)
    {
        echo "Hello $name" . PHP_EOL;
    }
}
