<?php

$todolist = [
    0 => "Membaca",
    1 => "membuat course",
    2 => "makan siang"
];

$memilih = [
    1 => "Tambah",
    2 => "Delet"
];


do {
    echo "TODO LIST" . PHP_EOL;
    echo "list harian" . PHP_EOL;
    foreach ($todolist as $key => $lawak) {
        echo $key + 1 . "." . $lawak . PHP_EOL;
    }
    echo "\n\n";
    foreach ($memilih as $key) {
        echo $key . PHP_EOL;
    }

    echo "Masukan pilihan : ";
    $newTask = readline();
    $todolist[] = $newTask;

    if ($inputan == 1) {
        echo "Masukan pilihan yang ingin ditambahkan : " . $todolist[] = readline() . PHP_EOL;
    } else {
        echo "Masukan pilihan yang ingin dihapuskan  : " . $index = readline() . PHP_EOL;
        unset($todolist[$index]);
    }

    foreach ($todolist as $key => $lawak) {
        echo "$key. $lawak" . PHP_EOL;
    }
} while ($a == 1);
