<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation Berbasis PHP</title>
</head>
<body>
    <h1>Selamat Datang di Situs Kami!</h1>
    <h3>Silahkan isi identitas anda</h3><br>
    <form action="proses.php" method="POST">
        <pre>
            Nama: <input type="text" name="nama"><br>
            Umur: <input type="text" name="umur"> tahun<br>
            Email: <input type="text" name="email"><br>
            <input type="submit" value="Submit">
        </pre>
    </form>
</body>
</html>