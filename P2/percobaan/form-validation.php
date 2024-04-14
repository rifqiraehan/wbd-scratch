<?php
    // Validasi Form dengan field kosong
    $nameErr = $emailErr = $genderErr = $websiteErr = $commentErr = "";
    $name = $email = $gender = $website = $comment = "";

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
            $websiteErr = "Website is required";
        } else {
            $website = test_input($_POST["website"]);
        }

        if (empty($_POST["comment"])) {
            $commentErr = "Comment is required";
        } else {
            $comment = test_input($_POST["comment"]);
        }

        if (empty($_POST["gender"])) {
            $genderErr = "Gender is required";
        } else {
            $gender = test_input($_POST["gender"]);
        }

    }

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);

        return $data;
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>

    <style>
    .error {
        color: red;
    }
    </style>

</head>
<body>
<h2>PHP Form Validation Example</h2>
<p><span class="error">* required field.</span></p>
<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <p>Name:
        <input type="text" name="name">
        <span class="error">* <?php echo $nameErr;?></span>
    </p>
    <p>Email:
        <input type="email" name="email">
        <span class="error">* <?php echo $emailErr;?></span>
    </p>
    <p>Website:
        <input type="url" name="website">
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