<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Anda memasuki halaman kedua</h2>
    <?php
    echo "Nama anda " . $_SESSION["nama"] . "<br>";
    echo "Umur Anda saat ini adalah " . $_SESSION["umur"] . " tahun<BR>";
    echo "Alamat email Anda adalah " . $_SESSION["email"] . "<BR>";
    ?>

    <p>
        <a href="data.php" style="text-decoration: none;">
            Klik disini
        </a> untuk menuju ke halaman awal.</p>
</body>
</html>