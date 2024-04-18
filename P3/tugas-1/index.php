<?php
require 'functions.php';

$produk = query("SELECT * FROM handphone");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Handphone Shop</title>
    <style>
        .input-field {
            margin-bottom: 10px;
        }

        input[type="submit"] {
            margin-top: 50px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <h1>HANDPHONE SHOP</h1>
    <p>Produk GSM Mobile (Best Price): </p>

    <form action="proses.php" method="POST">
        <?php foreach ($produk as $hp) : ?>
            <div class="input-field">
                <input type="checkbox" id="<?= $hp["id"] ?>" name="produk[]" value="<?= $hp["nama"] ?>">
                <label for="<?= $hp["id"] ?>"><?= $hp["nama"] ?> </label>Rp <?= number_format($hp["harga"], 0, ',', '.') ?>,-
            </div>
        <?php endforeach; ?>

        <p>=====================================</p>
        <p>Data Customer</p>
        <div class="input-field">
            <label for="id_customer">ID Customer<span style="margin-left: 25px;">:</span></label>
            <input type="number" id="id_customer" name="id_customer" required>
        </div>
        <div class="input-field">
            <label for="nama">Nama<span style="margin-left: 72px;">:</span></label>
            <input type="text" id="nama" name="nama" required>
        </div>
        <div class="input-field">
            <label for="email">Email<span style="margin-left: 72px;">:</span></label>
            <input type="email" id="email" name="email" required>
        </div>
        <div class="input-field">
            <label for="alamat">Alamat<span style="margin-left: 61px;">:</span></label>
            <input type="text" id="alamat" name="alamat" required>
        </div>
        <div class="input-field">
            <label for="member">Member<span style="margin-left: 55px;">:</span></label><br>
            <input type="radio" id="member" name="member" value="Member">
            <label for="member">Member</label><br>
            <input type="radio" id="bukan" name="bukan" value="Bukan">
            <label for="bukan">Bukan</label><br>
        </div>
        <div class="input-field">
            <label for="pembayaran">Pembayaran<span style="margin-left: 25px;">:</span></label><br>
            <select name="pembayaran" id="pembayaran">
            <option value="VISA">VISA</option>
            <option value="MasterCard">Master Card</option>
            <option value="DebitBCA">DebitBCA</option>
            </select>
        </div>

        <input type="submit" value="Proses">

    </form>

</body>
</html>