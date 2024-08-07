<?php

class Person
{
    var $name;
    var $addres;
    var $country;

    public function __construct(string $name, ?string $addres, ?string $country)
    {
        $this->name = $name;
        $this->addres = $addres;
        $this->country = $country;

        echo "Object person $this->name is construct" . PHP_EOL;
    }

    function sayHello1($name)
    {
        echo "sayhello1 Hello " . $name . " ,saya {$this->name}" . PHP_EOL;
    }

    function sayHello2(?string $name)
    {
        if (is_null($name)) {
            echo "sayhello2 Hello " . $this->name . PHP_EOL;
        } else {
            echo "sayhello2 Hello $name , my name is  {$this->name}" . PHP_EOL;
        }
    }

    function __destruct()
    {
        echo "Object person $this->name is destruct" . PHP_EOL;
    }
}