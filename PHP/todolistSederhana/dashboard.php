<?php
include 'service/db.php';
session_start();
include 'model/menampilkandata.php';
include 'model/logout.php';

$id_user = $_SESSION['id_user'];
$name = $_SESSION['username'];

$db->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>

<body style="background-color: black;color:aliceblue;">
    <h1>Selamat Datang di Dashboard, <?= $name . " id: " . $id_user; ?>
    </h1>
    <br>
    <form action="dashboard.php" method="POST">
        <ul>

            <li>
                <p><?php $list['namalist'] ?> - <?php $list['datetime'] ?> </p>
                <button type="submit" name="update">update</button>
                <button type="submit" name="delet">delet</button>
            </li>

        </ul>

        <input type="text" name="namalist" placeholder="Nama List" required>
        <button type="submit" name="add">Tambah</button>
        <br />
        <br />
        <button type="submit" name="logout">LOGOUT</button>
    </form>

</body>

</html>