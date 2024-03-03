<?php
class Product
{
    public function __construct(public string $id, public string $name, public int $price, public int $quantity = 0)
    {
    }
}

$product = new Product("1", "AHAHA", 15000);


// $this->id = $id;
// $this->name = $name;
// $this->price = $price;
// $this->quantity = $quantity;
// }
// }