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

trait ALL
{
    use SayGoodBye, SayHello, HasName, canRun {
    }
}

class Person extends parentPerson
{

    use ALL;

    use SayGoodBye, SayHello, HasName, canRun {
        // hello as private;
        // goodBye as private;
    }

    public function run(): void
    {
        echo "Person {$this->name} is running" . PHP_EOL;
    }
}
