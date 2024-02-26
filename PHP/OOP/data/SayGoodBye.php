<?php

namespace Data\traits;

trait SayGoodBye
{
    function goodBye(?string $name): void
    {
        if (is_null($name)) {
            echo "Good Bye " . PHP_EOL;
        } else {
            echo "Good Bye $name" . PHP_EOL;
        }
    }
}

trait SayHello
{
    function Hello(?string $name): void
    {
        if (is_null($name)) {
            echo "Hello " . PHP_EOL;
        } else {
            echo "Hello $name" . PHP_EOL;
        }
    }
}

trait HasName
{
    public string $name;
}

trait canRun
{
    public abstract function run(): void;
}

class parentPerson
{
    public function goodBye(?string $name): void
    {
        echo "Goodbye in person" . PHP_EOL;
    }

    public function hello(?string $name): void
    {
        echo "Hello in person" . PHP_EOL;
    }
}

class Person extends parentPerson
{
    use SayGoodBye, SayHello, HasName, canRun;

    public function run(): void
    {
        echo "Person {$this->name} is running" . PHP_EOL;
    }
}
