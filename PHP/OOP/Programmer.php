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
