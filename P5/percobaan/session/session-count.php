<?php
session_start();

if (isset($_SESSION['count'])) {
    $_SESSION['count']++;
} else {
    $_SESSION['count'] = 1;
}

$count = $_SESSION['count'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo session 1</title>
</head>

<body>
<h1>Demo session 1</h1>
<?= "Anda telah mengakses halaman ini sebanyak : $count kali"; ?>
</body>
</html>