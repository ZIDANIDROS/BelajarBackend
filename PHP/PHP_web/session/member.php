<?php
session_start();

if($_SESSION['login'] != true){
    header('Location: /session/login.php');
    exit();
}

$say = "Hello ". $_SESSION['username_login'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MEMBER</title>
</head>
<body>
    <h2><?= $say ?></h2>
    <a href="/session/logout.php">Logout</a>
</body>
</html>