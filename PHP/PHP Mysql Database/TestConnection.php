<?php

$host = "localhost";
$port = 3306;
$database = "belajar_php_database";
$username = "root";
$password = "";

try {
    $connection = new PDO("mysql:host=$host;port=$port;dbname=$database", $username, $password);
    echo "Sukses terkoneksi ke database";
} catch(PDOException $e) {
    echo "Koneksi gagal: " . $e->getMessage();
}
