<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Koneksi Database MySQL</title>
</head>
<body>
<h2>Koneksi Database MySQL</h2>
<?php
$conn = mysqli_connect("localhost","root","admin","kepegawaian");
if ($conn) {
    echo "OK Connected";
} else {
    echo "Server Not Connected";
}
?>
</body>
</html>