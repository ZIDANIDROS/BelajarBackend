<?php
$say = "Hello " . htmlspecialchars($_GET['name']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>get.php</title>
</head>
<body>
    <h1><?= $say ?></h1>
</body>
</html>