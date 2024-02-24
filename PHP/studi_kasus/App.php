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
            $todolist[] = readline();
            echo "apakah ingin menambah lagi ?(y/n) ";
            $boolIF = readline();
        } while ($boolIF == 'y' || $boolIF == 'Y');
    } elseif ($inputan == 2) {
        do {
            echo "Masukan list yang ingin dihapus : ";
            unset($todolist[$index]);
            echo "apakah ingin menghapus lagi ?(y/n) ";
            $boolIF = readline();
        } while ($boolIF == 'y' || $boolIF == 'Y');
    } else {
        break;
    }

    echo "\n\n";
    foreach ($todolist as $key => $lawak) {
        echo $key + 1 . "." . $lawak . PHP_EOL;
    }
    echo "apakah ingin kembali ke menu ?(y/n) ";
    $boolMENU = readline();
} while ($boolMENU == 'y' || $boolMENU == 'Y');
