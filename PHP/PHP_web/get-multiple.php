<?php
$say = "Hello " . $_GET['name1'] . " " . $_GET['name2'];
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