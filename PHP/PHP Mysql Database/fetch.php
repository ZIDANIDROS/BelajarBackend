<?php

require_once __DIR__ . '/getConnection.php';

$connection = getConnection();

$username = "admin";
$password = "admin";

$sql = "SELECT * FROM admin WHERE username = ? AND password = ?";
$result = $connection->prepare($sql);
$result->execute([$username,$password]);

if($row=$result->fetch()){
    echo "Sukses login : ". $row["username"] . PHP_EOL;
}else{
    echo "Gagal login" . PHP_EOL;
}

$connection = null;
