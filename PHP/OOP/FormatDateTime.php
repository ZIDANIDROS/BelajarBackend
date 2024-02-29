<?php

//https://www.php.net/manual/en/class.datetime.php
//merubah data tanggal menjadi text yang rapih

$date = new DateTime();
$date->setTimezone(new DateTimeZone("Asia/Jakarta"));

echo $date->format("Y-m-d H:i:s") . PHP_EOL;

$date = DateTime::createFromFormat("Y-m-d H:i:s", "1998-12-29 10:10:10", new DateTimeZone("Asia/Jakarta"));
var_dump($date);
