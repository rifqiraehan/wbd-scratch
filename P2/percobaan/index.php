<?php
// PHP5 case-sensitivity
ECHO "Politeknik Elektronika Negeri Surabaya <br>";
echo "Politeknik Elektronika Negeri Surabaya <br>";
EcHo "Politeknik Elektronika Negeri Surabaya <br>";

// Variabel pada PHP5 case-sensitive
$color = "red";
echo "My car is " . $color. "<br>";
// echo "My house is" . $COLOR. "<br>";
// echo "My boat is" . $coLOR. "<br>";

// Variabel $GLOBALS pada PHP
$x = 75;
$y = 25;

function addition() {
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}

addition();
echo $z;

echo "<br>";

// Variabel $_SERVER pada PHP
echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
echo "<br>";
echo $_SERVER['SERVER_SOFTWARE'];
echo "<br>";
echo $_SERVER['REQUEST_TIME'];
echo "<br>";
echo $_SERVER['SERVER_PORT'];
echo "<br>";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
    .error {
        color: red;
    }
    </style>
</head>
<body>
    <!-- Penanganan form menggunakan metode $_GET -->
    <form action="welcome.php" method="GET">
        <p>Name: <input type="text" name="name"></p>
        <p>Email: <input type="text" name="email"></p>
        <input type="submit" value="Submit">
    </form>

    <!-- Penanganan form menggunakan metode $_POST -->
    <form action="welcome.php" method="POST">
        <p>Name: <input type="text" name="name"></p>
        <p>Email: <input type="text" name="email"></p>
        <input type="submit" value="Submit">
    </form>


    <!-- Pembuatan Form -->
    <h2>PHP Form Validation Example</h2>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <p>Name:
            <input type="text" name="name">
        </p>
        <p>Email:
            <input type="text" name="email">
        </p>
        <p>Website:
            <input type="text" name="website">
        </p>
        <p>Comment:
            <textarea name="comment"></textarea>
        </p>
        <p>Gender:
            <input type="radio" name="gender" value="female">Female
            <input type="radio" name="gender" value="male">Male
        </p>

        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    // Validasi Form
    // define varieables and set to empty values
    $name = $email = $gender = $comment = $website = "";

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = test_input($_POST["name"]);
        $email = test_input($_POST["email"]);
        $website = test_input($_POST["website"]);
        $comment = test_input($_POST["comment"]);
        $gender = test_input($_POST["gender"]);
    }

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);

        return $data;
    }

    // Menampilkan data masukan
    echo "<h2>Your Input: </h2>";
    echo $name;
    echo "<br>";
    echo $email;
    echo "<br>";
    echo $website;
    echo "<br>";
    echo $comment;
    echo "<br>";
    echo $gender;
    echo "<br>";

    // Validasi Form dengan field kosong
    $nameErr = $emailErr = $genderErr = $websiteErr = $commentErr = "";

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["name"])) {
            $nameErr = "Name is required";
        } else {
            $name = test_input($_POST["name"]);
        }

        if (empty($_POST["email"])) {
            $emailErr = "Email is required";
        } else {
            $email = test_input($_POST["email"]);
        }

        if (empty($_POST["website"])) {
            $websiteErr = "";
        } else {
            $website = test_input($_POST["website"]);
        }

        if (empty($_POST["comment"])) {
            $commentErr = "";
        } else {
            $comment = test_input($_POST["comment"]);
        }

        if (empty($_POST["gender"])) {
            $genderErr = "";
        } else {
            $gender = test_input($_POST["gender"]);
        }

    }

    ?>

    <h2>PHP Form Validation Example</h2>
    <p><span class="error">* required field.</span></p>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <p>Name:
            <input type="text" name="name">
            <span class="error">* <?php echo $nameErr;?></span>
        </p>
        <p>Email:
            <input type="text" name="email">
            <span class="error">* <?php echo $emailErr;?></span>
        </p>
        <p>Website:
            <input type="text" name="website">
            <span class="error">* <?php echo $websiteErr;?></span>
        </p>
        <p>Comment:
            <textarea name="comment"></textarea>
            <span class="error">* <?php echo $commentErr;?></span>
        </p>
        <p>Gender:
            <input type="radio" name="gender" value="female">Female
            <input type="radio" name="gender" value="male">Male
            <span class="error">* <?php echo $genderErr;?></span>
        </p>

        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    // Menampilkan data masukan
    echo "<h2>Your Input: </h2>";
    echo $name;
    echo "<br>";
    echo $email;
    echo "<br>";
    echo $website;
    echo "<br>";
    echo $comment;
    echo "<br>";
    echo $gender;
    echo "<br>";
    ?>

</body>
</html>


