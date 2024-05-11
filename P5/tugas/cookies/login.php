<?php
session_start();

require 'functions.php';

if( isset($_COOKIE['id']) && isset($_COOKIE['key'])) {
	$id = $_COOKIE['id'];
	$key = $_COOKIE['key'];

	$result = mysqli_query($conn, "SELECT email FROM users WHERE id = $id");
	$row = mysqli_fetch_assoc($result);

	if( $key === hash('sha256', $row['email']) ) {
		$_SESSION['login'] = true;
	}
}

if (isset($_COOKIE['email'])) {
    $_SESSION['login'] = true;
}

if (isset($_SESSION["login"])) {
    header("Location: index.php");
    exit;
}

if(isset($_POST["login"])) {
    if(isset($_POST['email']) && isset($_POST["password"])) {
        $email = $_POST["email"];
        $password = $_POST["password"];

        $_SESSION["email"] = $email;

        $result = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email'");

        if(mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if(password_verify($password, $row["password"])) {
                $_SESSION["login"] = true;

                if( isset($_POST['remember']) ) {
                    setcookie('id', $row['id'], time() + 60);
                    setcookie('key', hash('sha256', $row['email']), time() + 60);
                    setcookie('email', $email, time() + 60);
                }

                header("Location: index.php");
                exit;
            }
        }

        $error = true;
    }
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
    <li style="display: flex;">
        <input type="checkbox" name="remember" id="remember">
        <label for="remember">Ingat saya</label>
    </li>
    <li>
        <button type="submit" name="login">Login</button>
    </li>
</ul>
</form>
</body>
</html>