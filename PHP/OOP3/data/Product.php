<?php

class Product
{
    protected string $name;
    protected int $price;

    public function __construct(string $name, int $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getPrice(): int
    {
        return $this->price;
    }

    function info()
    {
        echo "$this->name adalah produk dari class Product dengan harga $this->price";
    }
}


class Dummy extends Product
{
    function info()
    {
        echo "$this->name adalah produk dari class Dummy dengan harga $this->price";
    }
}
