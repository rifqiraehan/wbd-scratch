<?php

session_start();

if (isset($_SESSION["login"])) {
    header("Location: index.php");
    exit;
}

require 'functions.php';

if(isset($_POST["register"])) {
    if(register($_POST) > 0) {
        echo "<script>
                alert('User baru berhasil ditambahkan!');
            </script>";
    } else {
        echo mysqli_error($conn);
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Register Page</title>
</head>
<body>
<h1>Halaman Registrasi</h1>

<form action="" method="POST">
<ul>
    <li>
        <label for="email">Email: </label>
        <input type="email" name="email" id="email" autofocus required>
    </li>
    <li>
        <label for="password">Password: </label>
        <input type="password" name="password" id="password" required>
    </li>
    <li>
        <label for="password2">Konfirmasi Password: </label>
        <input type="password" name="password2" id="password2" required>
    </li>
    <li>
        <button type="submit" name="register">Daftar</button>
    </li>
</ul>
</form>

</body>
</html>