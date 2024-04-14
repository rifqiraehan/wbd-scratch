<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <?php
    
    if ($_GET) {
        echo "<p>Welcome " . $_GET["name"];
        echo "<p>Your email address is: " . $_GET["email"];
    } else {
        echo "<p>Welcome " . $_POST["name"];
        echo "<p>Your email address is: " . $_POST["email"];
    }


    ?>

</body>
</html>