<?php
include 'service/db.php';

if (isset($_POST['add'])) {
    $list = $_POST['list'];

    $sql = $db->prepare("INSERT INTO list (namalist, datetime, id_user) VALUES (?, NOW(), ?, ?)");
    $sql->bind_param("ssi", $namalist, $id_user);

    if ($sql->execute()) {
        echo "Data berhasil ditambahkan.";
    } else {
        echo "Gagal menambahkan data.";
    }
}
