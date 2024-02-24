<?php

$todolist = [
    "Membaca", "membuat course", "makan siang"
];

$memilih = [
    1 => "Tambah",
    2 => "Delet",
    3 => "Keluar"
];


do {
    echo "\033[2J\033[;H";
    echo "TODO LIST" . PHP_EOL;
    echo "list harian" . PHP_EOL;
    for ($i = 0; $i < count($todolist); $i++) {
        echo ($i + 1) . ". " . $todolist[$i] . PHP_EOL;
    }
    echo "\n\n";
    foreach ($memilih as $key => $value) {
        echo "$key. $value" . PHP_EOL;
    }

    echo "Masukan pilihan : ";
    $inputan = readline();

    if ($inputan == 1) {
        do {
            echo "Masukan list yang ingin ditambahkan : ";
            $todolist[] = readline();
            echo "apakah ingin menambah lagi ?(y/n) ";
            $boolIF = readline();
        } while ($boolIF == 'y' || $boolIF == 'Y');
    } elseif ($inputan == 2) {
        do {
            echo "Masukan nomor yang ingin dihapus : ";
            $CMD = (int) readline();
            $index = $CMD - 1;
            if (isset($todolist[$index])) {
                unset($todolist[$index]);
                for ($i = 0; $i < $todolist; $i++) {
                    if ($todolist[$i] == null) {
                        $todolist[$i] = $todolist[$i + 1];
                    }
                }
            } else {
                echo "Nomor indeks tidak valid!" . PHP_EOL;
            }
            echo "apakah ingin menghapus lagi ?(y/n) ";
            $boolIF = readline();
        } while ($boolIF == 'y' || $boolIF == 'Y');
    } else {
        echo "Terima kasih telah menggunakan program. Sampai jumpa!";
        break;
    }

    echo "\n\n";
    for ($i = 0; $i < count($todolist); $i++) {
        echo $i + 1  . ". " . $todolist[$i] . PHP_EOL;
    }
    echo "apakah ingin kembali ke menu ?(y/n) ";
    $boolMENU = readline();
} while ($boolMENU == 'y' || $boolMENU == 'Y');
