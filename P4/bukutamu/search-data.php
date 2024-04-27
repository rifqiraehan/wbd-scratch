<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Searching Buku Tamu</title>
</head>
<body>
    <h2>Searching Buku Tamu untuk Database</h2>
    <form action="hasil-search.php" method="POST">
    <select name="kolom">
        <option value="nama">nama</option>
        <option value="email">email</option>
    </select>
    <p>Masukkan kata yang dicari: <input type="text" name="cari"></p>
    <input type="submit" value="Cari">

    </form>
</body>
</html>