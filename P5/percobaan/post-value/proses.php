<?php
session_start();

$_SESSION["nama"] = $_POST["nama"];
$_SESSION["umur"] = $_POST["umur"];
$_SESSION["email"] = $_POST["email"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?= "<h1>Halo " . $_SESSION["nama"] . "</h1>";?>
    <h2>Selamat Datang di Situs Kami!</h2>
    <?= "Umur Anda saat ini adalah " . $_SESSION["umur"] . " tahun <br>";
    echo "Email Anda adalah " . $_SESSION["email"];
    ?>
    <p>
        <a href="next.php" style="text-decoration: none;">
            Klik di sini
        </a> untuk menuju ke halaman berikut.</p>
</body>
</html>