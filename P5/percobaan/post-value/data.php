<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Selamat Datang di Situs Kami!</h1>
    <p>Silahkan isikan identitas anda!</p>
    <form action="proses.php" method="POST">
        <p>Nama: <input type="text" name="nama" required></p>
        <p>Umur: <input type="text" name="umur" required> tahun</p>
        <p>Email: <input type="text" name="email" required></p>
        <input type="submit" value="Submit">
    </form>
</body>
</html>