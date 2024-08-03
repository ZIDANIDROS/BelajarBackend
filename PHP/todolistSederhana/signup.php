<?php

include 'service/db.php';
session_start();

$signup_massage = "";

if (isset($_POST['signup'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username && $password) {
        try {
            $sql = $db->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
            $sql->bind_param("ss", $username, $password);
            if ($sql->execute()) {
                $signup_massage = "MASUK";
            } else {
                $signup_massage = "GAGAL MASUK";
            }
        } catch (mysqli_sql_exception) {
            $signup_massage = "username dan pw sudah ada";
        }
    } else {
        $signup_massage = "jangan kosong";
    }
    $db->close();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
</head>

<body style="background-color: black;color:aliceblue;">
    <h1>SILAHKAN DAFTAR</h1>

    <?= $signup_massage ?>
    <form action="signup.php" method="POST">
        <input type="text" name="username" placeholder="username">
        <input type="password" name="password" placeholder="password">
        <button type="submit" name="signup">signup</button>
    </form>


</body>

</html>