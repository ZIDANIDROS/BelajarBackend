<?php
include 'service/db.php';


$result = mysqli_query($db, "SELECT * FROM list");

var_dump($result);