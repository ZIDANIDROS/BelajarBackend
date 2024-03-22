<?php

$host       = '127.0.0.1';
$database   = 'mysql';
$port       = 3306;
$user       = 'root';
$password   = '';

try {
    $connection = new PDO($database . ":host=" . $host . ';port=' . $port, $user, $password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "SUKSES";
    return $connection;
} catch (PDOException $e) {
    echo $e->getMessage();
}

