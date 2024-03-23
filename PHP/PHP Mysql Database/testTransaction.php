<?php

require_once __DIR__ . '/getConnection.php';

$connection = getConnection();

$connection->beginTransaction();

$connection->exec("INSERT INTO tb_penjualan(ID, Name) VALUES(12,'LALAPO')");
$connection->exec("INSERT INTO tb_penjualan(ID, Name) VALUES(13,'LALAPO')");
$connection->exec("INSERT INTO tb_penjualan(ID, Name) VALUES(14,'LALAPO')");
$connection->exec("INSERT INTO tb_penjualan(ID, Name) VALUES(15,'LALAPO')");
$connection->exec("INSERT INTO tb_penjualan(ID, Name) VALUES(16,'LALAPO')");

// $connection->commit();
$connection->rollBack();//membatalkan seluruh dan id A-I tidak ke rollback
$connection = null;