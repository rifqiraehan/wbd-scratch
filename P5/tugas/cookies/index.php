<?php
session_start();

require 'functions.php';

if(!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

if(isset($_POST["proses"])) {
    if (isset($_POST['jenis_makanan']) && isset($_POST['jenis_minuman'])) {
        $jenis_makanan = $_POST["jenis_makanan"];
        $jenis_minuman = $_POST["jenis_minuman"];

        $_SESSION["jenis_makanan"] = $jenis_makanan;
        $_SESSION["jenis_minuman"] = $jenis_minuman;

        setcookie('jenis_makanan', $jenis_makanan, time() + 60);
        setcookie('jenis_minuman', $jenis_minuman, time() + 60);

        header("Location: order.php");
    }
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
                <form action="" method="POST">
                    <?php if(isset($_COOKIE["email"])): ?>
                        <p>Login Anda: <?= $_COOKIE["email"]; ?></p>
                    <?php else: ?>
                        <p>Login Anda: <?= $_SESSION["email"]; ?></p>
                    <?php endif; ?>
                    <p>Jenis Makanan:</p>
                    <input type="radio" id="soto_madura" name="jenis_makanan" value="Soto Madura">
                    <label for="soto_madura">Soto Madura</label><br>
                    <input type="radio" id="rawon_setan" name="jenis_makanan" value="Rawon Setan">
                    <label for="rawon_setan">Rawon Setan</label><br><br>

                    <p>Jenis Minuman:</p>
                    <input type="radio" id="jus_alpukat" name="jenis_minuman" value="Jus Alpukat">
                    <label for="jus_alpukat">Jus Alpukat</label><br>
                    <input type="radio" id="es_teler" name="jenis_minuman" value="Es Teler">
                    <label for="es_teler">Es Teler</label><br>

                    <button type="submit" name="proses">proses</button>
                </form>
            </td>
        </tr>
        <tr>
            <td class="credit"><p>Created By <b>Rifqi Raehan Hermawan</b></p></td>
        </tr>
    </table>
</body>
</html>