<?php

class product
{
    private string $name;
    private int $price;

    protected string $nameProtected;

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
}

class ProductDummy extends Product
{
    public function info()
    {
        echo "Name $this->nameProtected" . PHP_EOL; // menggunakan nameProtected supaya bisa di akses
    }
}
