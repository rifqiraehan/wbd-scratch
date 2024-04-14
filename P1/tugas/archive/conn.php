<?php
$servername = "localhost";
$username = "root";
$password = "admin";
$dbname = "baak_pens";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

// http://localhost:8080/college/back-to-basic/P1/tugas/conn.php