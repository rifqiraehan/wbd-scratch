<?php
$operand_kiri = $_POST["operand_kiri"];
$operator = $_POST["operator"];
$operand_kanan = $_POST["operand_kanan"];
$hasil = 0;

if ($operator == "+") {
    $hasil = $operand_kiri + $operand_kanan;
} elseif ($operator == "-") {
    $hasil = $operand_kiri - $operand_kanan;
} elseif ($operator == "*") {
    $hasil = $operand_kiri * $operand_kanan;
} elseif ($operator == "/") {
    $hasil = $operand_kiri / $operand_kanan;
} else {
    $hasil = $operand_kiri % $operand_kanan;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Kalkulator</title>
</head>
<body>
    <h1>Hasil Kalkulator</h1>
    <p><?= "Hasil dari $operand_kiri $operator $operand_kanan adalah $hasil"; ?></p>
    <button onclick="window.location.href='index.php'">Kembali</button>
</body>
</html>