<?php

require_once __DIR__ . '/getConnection.php';

$connection = getConnection();

$sql = 'SELECT * FROM tb_penjualan';
$statement = $connection->query($sql);

// foreach ($statement as $row) {
//     var_dump($row);
// }

foreach ($statement as $row) {
    $id = $row["ID"];
    $nama = $row["Name"];
    $alamat = $row["alamat"];

    echo "id = $id\n";
    echo "nama = $nama\n";
    echo "alamat = $alamat\n";
    echo PHP_EOL;
}

$connection = null;