<?php
include 'service/db.php';

$login_massage = "";

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = $db->prepare("SELECT * FROM users WHERE username = ? AND password = ?");
    $sql->bind_param("ss", $username, $password);
    $sql->execute();
    $result = $sql->get_result();

    if ($result->num_rows > 0) {
        header('Location: dashboard.php');
    } else {
        $login_massage = "username dan password salah";
    }
    $db->close();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body style="background-color: black;color:aliceblue;">
    <h1>SILAHKAN LOGIN</h1>

    <?= $login_massage ?>
    <form action="login.php" method="POST">
        <input type="text" name="username" placeholder="username">
        <input type="password" name="password" placeholder="password">
        <button type="submit" name="login">Login</button>
    </form>

</body>

</html>