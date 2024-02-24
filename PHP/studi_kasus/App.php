<?php

$todolist = [
    1 => "Membaca",
    2 => "membuat course",
    3 => "makan siang"
];

foreach ($todolist as $key => $lawak) {
    echo "$key. $lawak" . PHP_EOL;
}

echo "\n\n";

$memilih = [
    1 => "Tambah",
    2 => "Delet"
];

foreach ($memilih as $key) {
    echo $key . PHP_EOL;
}

echo "Masukan pilihan : " . $inputan = readline() . PHP_EOL;

if ($inputan == 1) {
    echo "Masukan pilihan yang ingin ditambahkan : " . $todolist[] = readline() . PHP_EOL;
} else {
    echo "Masukan pilihan yang ingin dihapuskan  : " . $index = readline() . PHP_EOL;
    unset($todolist[$index]);
}
