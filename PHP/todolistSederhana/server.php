<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['task'])) {
    $task = $_POST['task'];
    $stmt = $conn->prepare("INSERT INTO tasks (task) VALUES (?)");
    $stmt->bind_param("s", $task);
    if ($stmt->execute()) {
        header("Location: index.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$sql = "SELECT * FROM tasks";
$result = $conn->query($sql);

$conn->close();