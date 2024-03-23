<?php 

require_once __DIR__ . '/getConnection.php';

$connection = getConnection();

$sql = <<<SQL
    INSERT INTO tb_penjualan(ID,Name,alamat)
    VALUES(124,'zidan','jasndkjabkjs');
SQL;

$connection->exec($sql);
