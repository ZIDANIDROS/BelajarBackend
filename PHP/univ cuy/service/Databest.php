<?php

$db = mysqli_connect("localhost", "root", "", "test");

if ($db->connect_error) {
    echo "database error";
    die("Error");
}
