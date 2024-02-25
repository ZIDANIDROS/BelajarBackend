<?php

class Person
{
    const AUTHOR = "PZN";
    var string $name;
    var ?string $gender; //nulable = bisa/noleh null
    var string $country;

    public function __construct(string $name, ?string $gender)
    {
        $this->name = $name;
        $this->gender = $gender;
    }
    function sayHello(?string $name)
    {
        if (is_null($name)) {
            echo "Hi my name is {$this->name}" . PHP_EOL;
        } else {
            echo "Hi my name is $name" . PHP_EOL;
        }
    }

    function info()
    {
        echo "Author : " . self::AUTHOR . PHP_EOL;
    }
}
