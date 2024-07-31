<?php
include "service/Databest.php";

if (isset($_POST['login'])) {
    $username = $_POST["username"];
    $pw = $_POST["pw"];
}

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
    <h3>Login</h3>
    <form action="login.php" method="POST">
        <input type="text" placeholder="username" name="username">
        <input type="password" placeholder="password" name="pw">
        <button type="submit" name="login">Login</button>
    </form>
    <?php include "layout/footer.html" ?>
</body>

</html>