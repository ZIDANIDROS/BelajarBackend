<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
</head>
<body>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Mengambil data dari array $_POST
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    
    // Menampilkan data yang diterima
    echo "Welcome, $name!<br>";
    echo "Your email address is: $email";
} else {
    echo "Form was not submitted properly.";
}
?>

</body>
</html>
