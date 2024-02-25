<?php

class Person
{
    const AUTHOR = "PZN";
    var string $name;
    var ?string $gender; //nulable = bisa/noleh null
    var string $country;

    function sayHello(?string $name)
    {
        if (is_null($name)) {
            echo "Hi my name is {$this->name}" . PHP_EOL;
        } else {
            echo "Hi my name is $name" . PHP_EOL;
        }
    }
}
