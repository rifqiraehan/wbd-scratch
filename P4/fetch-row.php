<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MySQL Fetch Row</title>
</head>
<body>
<h2>Akses tabel menggunakan mysql_fetch_row()</h2>
<?php
$conn = mysqli_connect("localhost", "root", "admin", "library") or die("Koneksi gagal");

if($result = mysqli_query($conn, "SELECT * FROM category")) {

    while ($row = mysqli_fetch_row($result)) {
        echo "ID Kategori: " . $row["category_id"];
        // echo "ID Kategori: " . $row[0];
        echo " dengan nama kategori " . $row[1] . "<br>";
    }
}

?>
</body>
</html>