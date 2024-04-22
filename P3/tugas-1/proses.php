<?php
require 'functions.php';

$produk = query("SELECT * FROM handphone");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proses</title>

    <style>
        ul {
            list-style-type: none;
            padding: 0;
        }
    </style>
</head>
<body>
    <b>Produk yang dibeli: </b><br>

    <?php
    $total_pembayaran = 0;

    foreach ($produk as $hp) {
        if (isset($_POST["produk"]) && in_array($hp["nama"], $_POST["produk"])) {
            $total_pembayaran += $hp["harga"];
            echo "{$hp["nama"]} Rp " . number_format($hp["harga"], 0, ',', '.') . ",-<br>";
        }
    }
    ?>

    <p>=====================================</p>
    <ul>
        <li><b>Data Customer: </b></li>
        <li>ID Customer: <?= $_POST["id_customer"] ?></li>
        <li>Nama: <?= $_POST["nama"] ?></li>
        <li>Email: <?= $_POST["email"] ?></li>
        <li>Alamat: <?= $_POST["alamat"] ?></li>
        <li>Member: <?= $_POST["member"] ?></li>
        <li>Pembayaran: <?= $_POST["pembayaran"] ?></li>

        <?php
        $harga = array($hp["harga"]);
        echo "Total Pembayaran: Rp " . number_format(($total_pembayaran), 0, ',', '.') . ',-';

        if ($_POST["member"] == "Member") {
            $diskon = $total_pembayaran * 10 / 100;
            echo "<br>Diskon member: 10%";
            echo "<br>Pembayaran Akhir: Rp " . number_format(($total_pembayaran) - $diskon, 0, ',', '.') . ',-';
        } else {
            echo "<br>Pembayaran Akhir: Rp " . number_format($total_pembayaran, 0, ',', '.') . ',-';
        }
        ?>

    </ul>
</body>
</html>