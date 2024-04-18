<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contoh Form dengan POST</title>
</head>
<body>
    <h1>Buku Tamu</h1>
    <p>Komentar dan saran sangat kami butuhkan untuk meningkatkan kualitas situs kami.</p>
    <hr>
    <form action="proc_bukutamu.php" method="POST">
        <pre>
            Nama anda: <input type="text" name="nama" size="25" maxlength="50"><br>
            Email Address: <input type="text" name="email" size="25" maxlength="50"><br>
            Komentar: <textarea name="komentar" cols="40" rows="5"></textarea><br>
            <input type="submit" value="kirim"> <input type="reset" value="ulangi">
        </pre>
    </form>
</body>
</html>