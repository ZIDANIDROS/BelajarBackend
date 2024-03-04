<?php

function sayHello(stringable $stringable): void
{
    "Hello {$stringable->__toString()}" . PHP_EOL;
}

class Person
{
    public function __toString(): string
    {
        return "Person";
    }
}

sayHello(new Person("HAHA"));
