<?php
session_start();

require 'functions.php';

if(!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/order.css">
    <title>Document</title>
</head>
<body>
    <table border="1" cellpadding="20">
        <tr>
            <td class="credit"><p>HOMEPAGE <b>RAEHAN</p></b></td>
        </tr>
        <tr class="credit">
            <td class="form-td">
                <a href="logout.php">Logout</a>
            </td>
            <td class="form-td">
                <?php if(isset($_COOKIE["email"])): ?>
                    <p>Login Anda: <?= $_COOKIE["email"]; ?></p>
                <?php else: ?>
                    <p>Login Anda: <?= $_SESSION["email"]; ?></p>
                <?php endif; ?>
                <p>Makanan yang dipesan: <?= $_COOKIE["jenis_makanan"]; ?></p>
                <p>Minuman yang dipesan: <?= $_COOKIE["jenis_minuman"]; ?></p>
                <p>Terimakasih atas kunjungan anda.</p>
            </td>
        </tr>
        <tr>
            <td class="credit"><p>Created By <b>Rifqi Raehan Hermawan</b></p></td>
        </tr>
    </table>
</body>
</html>