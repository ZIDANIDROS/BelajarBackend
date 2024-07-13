<?php

// Memeriksa jika form dikirim dengan metode POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Mengambil data dari array $_POST
    if(isset($_POST['name'])) {
        $name = htmlspecialchars($_POST['name']);
    }
    
    if(isset($_POST['email'])) {
        $email = htmlspecialchars($_POST['email']);
    }

    if(isset($_POST['kegiatan'])){
        $kegiatan = htmlspecialchars($_POST['kegiatan']);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
    <link rel="stylesheet" href="/../gaya.css">
</head>
<body>
    <?php if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($name) && !empty($email)): ?>
        <?php
        // Menampilkan data yang diterima
        echo "<h1>Welcome, $name!<br></h1>";
        echo "Your email address is: $email";
        ?>
    <?php endif ?>

    <form action="welcome.php" method="POST">
        <input type="text" name="kegiatan" placeholder="Masukan kegiatan">
        <button type="submit">GAS!</button>
    </form>

    <ul>
        <?php if (!empty($kegiatan)): ?>
            <li><?php echo htmlspecialchars($kegiatan); ?></li>
        <?php endif; ?>
    </ul>
</body>
</html>
