<?php
include "service/Databest.php";
session_start();

$login_mssage = "";

if (isset($_SESSION["is_login"])) {
    header("location: dashboard.php");
}

if (isset($_POST['login'])) {
    $username = $_POST["username"];
    $pw = $_POST["pw"];

    $sql = "SELECT * from users where userne='$username' AND password='$pw'";
    $result = $db->query($sql);

    if ($result->num_rows == 1) {
        $data = $result->fetch_assoc();
        $_SESSION["username"] = $data["username"];
        $_SESSION["is_login"] = true;
        header("location: dashboard.php");
        exit();
    } else {
        $login_mssage = "Gagal Masuk";
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

<body style="background-color: black;color:aliceblue;">
    <?php include "layout/header.html" ?>
    <a href="index.php">Home</a>

    <h3>Login</h3>
    <i><?= $login_mssage ?></i>
    <form action="login.php" method="POST">
        <input type="text" placeholder="username" name="username">
        <input type="password" placeholder="password" name="pw">
        <button type="submit" name="login">Login</button>
    </form>

    <?php include "layout/footer.html" ?>
</body>

</html>