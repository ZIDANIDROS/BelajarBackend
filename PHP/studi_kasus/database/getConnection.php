<?php

function getConnection(): PDO {
    $host       = 'localhost';
    $database   = 'test';
    $port       = 3306;
    $user       = 'root';
    $password   = '';

    try {
        $pdo = new PDO("mysql:host=$host;port=$port;dbname=$database", $user, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    } catch(PDOException $e) {
        echo "Koneksi Gagal: " . $e->getMessage();
        exit();
    }
}
