<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo Operator</title>
</head>
<body>
    <h1>Demo Operator</h1>
    <h1>Artihmetic</h1>
    <form action="proses.php" method="POST">
        <table border="1">
            <thead>
                <th>Operand Kiri</th>
                <th>Operator</th>
                <th>Operand Kanan</th>
                <th></th>
            </thead>
            <tr>
                <td><input type="number" name="operand_kiri" required></td>
                <td>
                    <select name="operator" id="operator">
                        <option value="+">+</option>
                        <option value="-">-</option>
                        <option value="*">*</option>
                        <option value="/">/</option>
                        <option value="%">%</option>
                    </select>
                </td>
                <td><input type="number" name="operand_kanan" required></td>
                <td><input type="submit" value="Hitung"></td>
            </tr>
        </table>
    </form>
</body>
</html>