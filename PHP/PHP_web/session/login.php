<?php
session_start();

if(isset($_SESSION['login']) && $_SESSION['login'] == true){
    header('location: /session/member.php');
    exit();
}

$error = "";
if ($_SERVER['REQUEST_METHOD']=="POST") {
    if ($_POST['username'] == 'husein' && $_POST['password'] == 'husein') {
        $_SESSION['login'] = true;
        $_SESSION['username_login'] = 'Husein';
        header('location: /session/member.php');
        exit();
    } else {
        $error = "login gagal";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
</head>
<body>
    <?php if($error != ""){?>
        <h2><?= $error ?></h2>
    <?php } ?>
    <h1>LOGIN</h1>
    <form action="/session/login.php" method="post">
        <label for="">Username :
            <input type="text" name="username">
        </label>
        <br/>
        <label for="">Password :
            <input type="password" name="password">
        </label>
        <br/>
        <input type="submit" value="Login">
    </form>
</body>
</html>