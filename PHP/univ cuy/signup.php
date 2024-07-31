<?php

include "service/Databest.php";


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iya</title>
</head>

<body>
    <?php include "layout/header.html" ?>
    <a href="index.php">Home</a>
    <h3>DAFTAR AKUN</h3>
    <form action="signup.php" method="POST">
        <input type="text" placeholder="username" name="username">
        <input type="password" placeholder="password" name="password">
        <button type="submit">daftar sekarang</button>
    </form>
    <?php include "layout/footer.html" ?>
</body>

</html>