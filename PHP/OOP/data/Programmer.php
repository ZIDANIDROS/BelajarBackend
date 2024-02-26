<?php
class Programmer
{
    public string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }
}

class backendProgrammer extends Programmer
{
}

class frontendProgrammer extends Programmer
{
}

class Company
{
    public Programmer $programmer;
}

function sayHelloProgrammer(Programmer $programmer)
{

    if ($programmer instanceof backendProgrammer) {
        echo "Hello backendProgrammer $programmer->name" . PHP_EOL;
    } elseif ($programmer instanceof frontendProgrammer) {
        echo "Hello frontendProgrammer $programmer->name" . PHP_EOL;
    } elseif ($programmer instanceof Programmer) {
        echo "Hello Programmer $programmer->name" . PHP_EOL;
    }
}
