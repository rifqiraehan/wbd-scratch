<?php
$conn = mysqli_connect("localhost", "root", "admin", "pens");

function query($query) {
	global $conn;

    $result = mysqli_query($conn, $query);
	$rows = [];
	while( $row = mysqli_fetch_assoc($result) ) {
		$rows[] = $row;
	}
	return $rows;
}

function register($data) {
	global $conn;

	$email = $data["email"];
	$password = mysqli_real_escape_string($conn, $data["password"]);
	$password2 = mysqli_real_escape_string($conn, $data["password2"]);

	$result = mysqli_query($conn, "SELECT email FROM users WHERE email = '$email'");

	if( mysqli_fetch_assoc($result) ) {
		echo "<script>
				alert('Email sudah terdaftar!')
		      </script>";
		return false;
	}

	if( $password !== $password2 ) {
		echo "<script>
				alert('Konfirmasi password tidak sesuai!');
		      </script>";
		return false;
	}

	$password = password_hash($password, PASSWORD_DEFAULT);

	mysqli_query($conn, "INSERT INTO users VALUES('', '$email', '$password')");

	return mysqli_affected_rows($conn);

}