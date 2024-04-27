<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Data Buku Tamu</title>
</head>
<body>
<?php
$conn = mysqli_connect("localhost", "root", "admin", "library");
$hasil = mysqli_query($conn, "SELECT * FROM bukutamu");
$jumlah = mysqli_num_rows($hasil);
echo "<h2>Daftar Pengunjung</h2>";
echo "jumlah pengunjung: $jumlah<br><br>";

$a = 1;
while ($data = mysqli_fetch_array($hasil)){
    echo "No: $a<br>";
    echo "Nama: $data[nama]<br>";
    echo "Email: $data[email]<br>";
    echo "Komentar: $data[komentar]<br><br>";
    $a++;
}
?>
</body>
</html>