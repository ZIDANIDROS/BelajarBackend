<?php

$host       = '127.0.0.1';
$database   = 'mysql';
$port       = 3306;
$user       = 'root';
$password   = '';


return new PDO($database . ":host=" . $host . ';port=' . $port, $user, $password);


