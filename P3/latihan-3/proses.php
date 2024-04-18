<?php
$nama = $_POST['nama'];
$umur = $_POST['umur'];
$email = $_POST['email'];

if(strlen($nama) == 0) {
    echo "Silahkan masukkan nama Anda<br>";
} else if ((trim($umur) == '') || ($umur < 0) || preg_match('[^0-9]', $umur)) {
    echo "Input umur Anda salah!<br>";
} else if (!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/", $email)) {
    echo "Invalid email<br>";
} else {
    echo "Data yang Anda masukkan:<br>";
    echo "Nama: $nama<br>";
    echo "Umur: $umur<br>";
    echo "Email: $email<br>";
}

?>

