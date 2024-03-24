<?php 
require_once __DIR__ . '/getConnection.php';
require_once __DIR__ . '/Model/tb_penjualan.php';
require_once __DIR__ . '/Repository/tb_penjualanRepository.php';

use Repository\tb_penjualanRepositoryImpl;
use Model\tb_penjualan;

$connection = getConnection();
$repository = new tb_penjualanRepositoryImpl($connection);

$name = new tb_penjualan(123, "HAI");
$newName = $repository->insert($name);

var_dump($newName->getId());

$connection = null;