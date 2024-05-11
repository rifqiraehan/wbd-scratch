<?php
session_start();

if (isset($_SESSION["login"])) {
    header("Location: index.php");
    exit;
}

require 'functions.php';

if(isset($_POST["login"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $_SESSION["email"] = $email;

    $result = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email'");

    if(mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
        if(password_verify($password, $row["password"])) {
            $_SESSION["login"] = true;

            header("Location: index.php");
            exit;
        }
    }

    $error = true;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Login Page</title>
</head>
<body>

<h1>PROSES LOGIN</h1>
<?php if(isset($error)) : ?>
    <p style="color: red;">Account anda belum terdaftar di web kami. </p>
<?php endif; ?>
<form action="" method="POST">
<ul>
    <li>
        <label for="email">Email: </label>
        <input type="text" name="email" id="email" autofocus required>
    </li>
    <li>
        <label for="password">Password: </label>
        <input type="password" name="password" id="password" required>
    </li>
    <li>
        <button type="submit" name="login">login</button>
    </li>
</ul>
</form>
</body>
</html>