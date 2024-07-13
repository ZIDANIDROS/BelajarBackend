<!-- <?php
include 'db.php';
include 'server.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>To-Do List</title>
</head>
<body>
    <h1>To-Do List</h1>
    <form method="POST" action="">
        <input type="text" name="task" placeholder="Enter a new task">
        <button type="submit">Add Task</button>
    </form>

    <ul>
        <?php 
            while ($row = $result->fetch_assoc()): ?>
            <li>
                <?php 
                echo $row['task']; ?> (<?php echo $row['status']; ?>)
                <a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>
                <a href="complete.php?id=<?php echo $row['id']; ?>">Complete</a>
            </li><?php 
            endwhile; ?>
    </ul>
</body>
</html> -->
