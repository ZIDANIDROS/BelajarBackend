<?php

require_once 'data/Product.php';

$product = new Product('Tanggo', 5000);
$product->info();

echo PHP_EOL;

$product1 = new Dummy('Tanggo', 5000);
$product1->info();