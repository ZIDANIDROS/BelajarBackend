<?php

if ($_SERVER['REQUEST_METHOD']=="POST") {
    $file_name = $_FILES['upload_file']['name'];
    $file_type = $_FILES['upload_file']['type'];
    $file_size = $_FILES['upload_file']['size'];
    $file_tmp_name = $_FILES['upload_file']['tmp_name'];
    $file_error = $_FILES['upload_file']['error'];

    $upload_dir = __DIR__ . '/file/';
    if (!file_exists($upload_dir)) {
        mkdir($upload_dir, 0777, true);
    }

    $destination = $upload_dir . $file_name;
    move_uploaded_file($file_tmp_name, $destination);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>upload.php</title>
</head>
<body>
    <?php if ($_SERVER['REQUEST_METHOD']=="POST") { ?>
        <table>
            <tr>
                <td>File Name</td>
                <td><?= $file_name ?></td>
            </tr>
            <tr>
                <td>File Type</td>
                <td><?= $file_type ?></td>
            </tr>
            <tr>
                <td>File Size</td>
                <td><?= $file_size ?> kb</td>
            </tr>
            <tr>
                <td>File temp name</td>
                <td><?= $file_tmp_name ?></td>
            </tr>
            <tr>
                <td>File error</td>
                <td><?= $file_error ?></td>
            </tr>
        </table>
    <?php } ?>

    <h1>Form Uplod</h1>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <ltafor="">
            <input type="file" name="upload_file">
        </ltafor=>
        <input type="submit" value="Upload">
    </form>
</body>
</html>