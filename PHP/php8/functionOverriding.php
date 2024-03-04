<?php

trait SampleTrait
{
    public abstract function sampleFunction(string $name): string;
}

//jika string childnya juga harus string
class SampleClass
{
    use SampleTrait;

    public function sampleFunction(string $name): string
    {
        return $name;
    }
}

class Manager
{
    private function test(): void //private
    {
    }
}

class VicePresident extends Manager
{
    public function test(string $name): string //di childnya publik, boleh
    {
        return "VP";
    }
}
