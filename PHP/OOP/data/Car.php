<?php

namespace Data;


interface Hasbrand
{
    function getBrand(): string;
}

interface IsMaintenance
{
    function IsMaintenance(): bool;
}

interface Car extends Hasbrand
{
    function drive(): void;

    function getTire(): int;
}

class Avanza implements Car, IsMaintenance
{
    function drive(): void
    {
        echo "Drive Avaza" . PHP_EOL;
    }

    function getTire(): int
    {
        return 4;
    }

    public function getBrand(): string
    {
        return "Toyota";
    }

    public function IsMaintenance(): bool
    {
        return true;
    }
}
