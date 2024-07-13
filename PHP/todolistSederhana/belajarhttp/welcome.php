<?php
session_start();

$name = "";
$email = "";
$kegiatan = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Mengambil data dari array $_POST dan menyimpannya ke sesi
    $_SESSION['name'] = htmlspecialchars($_POST['name']);
    $_SESSION['email'] = htmlspecialchars($_POST['email']);
    
    if(isset($_POST['kegiatan'])){
        $_SESSION['kegiatan'] = htmlspecialchars($_POST['kegiatan']);
    }

    // Redirect untuk mencegah form resubmission
    header("Location: welcome.php");
    exit();
}

// Mengambil data dari sesi
$name = isset($_SESSION['name']) ? $_SESSION['name'] : "";
$email = isset($_SESSION['email']) ? $_SESSION['email'] : "";
$kegiatan = isset($_SESSION['kegiatan']) ? $_SESSION['kegiatan'] : "";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
    <link rel="stylesheet" href="/../gaya.css">
</head>
<body>
    <?php if (!empty($name) && !empty($email)): ?>
        <?php
        // Menampilkan data yang diterima
        echo "Welcome, $name!<br>";
        echo "Your email address is: $email";
        ?>
    <?php endif; ?>

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
