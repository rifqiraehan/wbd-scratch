<?php
    include 'conn.php';

    $sql = "SELECT * FROM siswa";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        echo "<table><tr><th>ID</th><th>Nama</th><th>Alamat</th></tr>";
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            echo "<tr><td>".$row["id"]."</td><td>".$row["nama"]."</td><td>".$row["alamat"]."</td></tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas</title>

    <style>
        body {
            margin: 0;
        }

        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #333;
            position: fixed;
            top: 0;
            width: 100%;
        }

        li {
            float: left;
        }

        li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        li a:hover:not(.active) {
            background-color: #111;
        }

        .active {
            background-color: gray;
        }

        table,
        td,
        th {
            border: 1px solid #ddd;
            text-align: left;
            margin-top: 5rem;
            margin-left: 2rem;
        }

        table {
            border-collapse: collapse;
            width: 50%;
        }

        th,
        td {
            padding: 15px;
        }
    </style>
</head>

<body>
    <ul>
        <li><a class="active" href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Products</a></li>
    </ul>

    <table>
        <tr>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Savings</th>
        </tr>
        <tr>
            <td>Peter</td>
            <td>Griffin</td>
            <td>$100</td>
        </tr>
    </table>
</body>

</html>