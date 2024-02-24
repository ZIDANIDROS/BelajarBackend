<?php

$todolist = [
    0 => "Membaca",
    1 => "membuat course",
    2 => "makan siang"
];

$memilih = [
    1 => "Tambah",
    2 => "Delet",
    3 => "Keluar"
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
    $inputan = readline();
    $memilih[] = $inputan;

    if ($inputan == 1) {
        do {
            echo "Masukan list yang ingin ditambahkan : ";
            $todolist[] = (int)readline() . PHP_EOL;
            echo "apakah ingin menambah lagi ?(y/n) ";
            $inputanif = readline() . PHP_EOL;
        } while ($inputanif == 'y' || 'Y');
    } elseif ($inputan == 2) {
        echo "Masukan pilihan yang ingin dihapuskan  : " . $index = readline() . PHP_EOL;
        unset($todolist[$index]);
    } else {
        break;
    }

    echo "\n\n";
    foreach ($todolist as $key => $lawak) {
        echo $key + 1 . "." . $lawak . PHP_EOL;
    }
} while ($a == 1);
