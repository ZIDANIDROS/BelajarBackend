<?php

include "service/Databest.php";
session_start();

$signup_mssage = "";

if (isset($_SESSION["is_login"])) {
    header("location: dashboard.php");
}


if (isset($_POST["signup"])) {
    $username = $_POST["username"];
    $pw = $_POST["pw"];

    try {
        $sql = "INSERT INTO users (username,password) VALUES ('$username','$pw')";

        if ($db->query($sql)) {
            $signup_mssage = "Daftar sukses";
        } else {
            $signup_mssage = "gagal, silahkan muncul lagi";
        }
    } catch (mysqli_sql_exception) {
        $signup_mssage = "Username sudah ada";
    }
    $db->close();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iya</title>
</head>

<body style="background-color: black;color:aliceblue">
    <?php include "layout/header.html" ?>
    <a href="index.php">Home</a>
    <h3>DAFTAR AKUN</h3>
    <i><?= $signup_mssage ?></i>
    <form action="signup.php" method="POST">
        <input type="text" placeholder="username" name="username">
        <input type="password" placeholder="password" name="pw">
        <button type="submit" name="signup">daftar sekarang</button>
    </form>
    <?php include "layout/footer.html" ?>
</body>

</html>