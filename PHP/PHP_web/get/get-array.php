<?php

$numbers = $_GET["numbers"];
$total = 0;

foreach ($numbers as $number) {
    $total += $number;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>get-array.php</title>
</head>
<body>
    <h1>total = <?= $total?></h1>
</body>
</html>