<?php

$todolist = [
    1 => "Membaca",
    2 => "Membuat course",
    3 => "Makan siang"
];

foreach ($todolist as $key => $task) {
    echo "$key. $task" . PHP_EOL;
}

echo "\n\n";

$choices = [
    1 => "Tambah",
    2 => "Hapus"
];

foreach ($choices as $key => $choice) {
    echo "$key. $choice" . PHP_EOL;
}

echo "Masukkan pilihan : ";
$input = (int) readline();

if ($input === 1) {
    echo "Masukkan pilihan yang ingin ditambahkan : ";
    $newTask = readline();
    $todolist[] = $newTask;
} elseif ($input === 2) {
    echo "Masukkan nomor tugas yang ingin dihapus : ";
    $index = (int) readline();
    if (isset($todolist[$index])) {
        unset($todolist[$index]);
        $todolist = array_values($todolist); // Memperbarui indeks
    } else {
        echo "Nomor tugas tidak valid!" . PHP_EOL;
    }
} else {
    echo "Pilihan tidak valid!" . PHP_EOL;
}

// Menampilkan todolist setelah perubahan
echo "\nTodolist setelah perubahan:\n";
foreach ($todolist as $key => $task) {
    echo "$key. $task" . PHP_EOL;
}
