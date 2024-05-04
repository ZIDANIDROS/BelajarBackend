<?php

header('Application: Belajar Web');
header('Author: Husein Zidan');

$client = $_SERVER['HTTP_CLIENT_NAME'];

echo "Hello $client";