<?php

include "service/Databest.php";
session_start();

if (isset($_POST['logout'])) {
    session_unset();
    session_destroy();
    header('location:index.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body style="background-color: black;color:aliceblue;">
    <?php include "layout/header.html" ?>
    <a href="index.php">Home</a>

    <h3>Selamat Datang <?= $_SESSION["username"] ?></h3>
    <form action="dashboard.php" method="POST">
        <button type="submit" name="logout">LOGOUT</button>
    </form>

    <?php include "layout/footer.html" ?>
</body>

</html>