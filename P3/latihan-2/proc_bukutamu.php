<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku Tamu</title>
</head>
<body>
    <?php
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $komentar = $_POST["komentar"];
    ?>

    <h1>Data Buku Tamu</h1>
    <hr>
    Nama anda: <?= $nama; ?><br>
    Email anda: <?= $email; ?><br>
    Komentar: <?= $komentar; ?>

</body>
</html>