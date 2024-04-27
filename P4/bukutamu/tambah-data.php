<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simpan Buku Tamu MySQL</title>
</head>
<body>
<h2>Simpan Buku Tamu MySQL</h2>
<?php

$nama = $_POST["nama"];
$email = $_POST["email"];
$komentar = $_POST["komentar"];

$conn = mysqli_connect("localhost", "root", "admin", "library") or die("Koneksi gagal");

echo "Nama: $nama <br>";
echo "Email: $email <br>";
echo "Komentar: $komentar <br>";
$sqlstr = "insert into bukutamu(id_bukutamu, nama,email,komentar) values('', '$nama','$email','$komentar')";
$hasil = mysqli_query($conn, $sqlstr) or die("Query gagal");
echo "Simpan buku tamu berhasil disimpan";
?>

</body>
</html>