<?php

$todolist = [
    1 => "Membaca",
    2 => "membuat course",
    3 => "makan siang"
];

foreach ($todolist as $key => $lawak) {
    echo "$key. $lawak" . PHP_EOL;
}

$inputan = readline();

if ($inputan == 1) {
} else {
    # code...
}
