<?php
session_start();

$idSession = session_id();

session_destroy();

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
    <title>Demo session – destroy</title>
</head>

<body>
<h1>Demo Session – reset nilai</h1>

<?php
echo "<br> ID Session: " . $idSession;
echo "<br>Anda telah mengakses server ini sebanyak: $count kali";
?>
</body>
</html>