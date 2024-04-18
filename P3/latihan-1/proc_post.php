<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proses Input</title>
</head>
<body>
    <?php
    $bil1 = $_POST["bil1"];
    $bil2 = $_POST["bil2"];
    ?>

    <h1>Perbandingan Bilangan</h1>
    <hr>
    <p>Bilangan Pertama: <?php echo $bil1; ?></p>
    <p>Bilangan Kedua: <?php echo $bil2; ?></p>

    <?php
    if ($bil1 < $bil2) {
        echo "$bil1 lebih kecil dari $bil2";
    } elseif ($bil1 > $bil2) {
        echo "$bil1 lebih besar dari $bil2";
    } else {
        echo "$bil1 sama dengan $bil2";
    }
    ?>

</body>
</html>