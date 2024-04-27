<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Search</title>
</head>

<body>
<?php
$kolom = $_POST['kolom'];
$cari = $_POST['cari'];
$conn = mysqli_connect("localhost", "root", "admin", "library");
$hasil = mysqli_query($conn, "SELECT * FROM bukutamu WHERE $kolom LIKE '%$cari%'");
$jumlah = mysqli_num_rows($hasil);

echo "<h2>Hasil Pencarian</h2>";
echo "Ditemukan: $jumlah <br>";

while ($baris = mysqli_fetch_array($hasil)) {
    echo "Nama: $baris[nama] <br>";
    echo "Email: $baris[email] <br>";
    echo "Komentar: $baris[komentar] <br><br>";
}

?>
</body>

</html>

