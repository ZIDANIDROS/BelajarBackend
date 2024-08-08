<?php

require 'class\Product.php';

use nama\harga\Product as produk;

$produk1 = new produk('tanggo', 5000);
$produk1->info();
