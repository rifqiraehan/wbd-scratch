<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemrograman PHP</title>
</head>
<body>
    <!-- Sintak dasar PHP -->
    <h1>My first PHP page</h1>

        echo "Hello World!";

        echo "<br><br>";

        <?php
        // Fungsi pada PHP5
        function writeMsg() {
            echo "Hello world! (di dalam fungsi)";
        }
        writeMsg();

        echo "<br><br>";

        // Array PHP5
        $cars=array("Volvo","BMW","Toyota");
        echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";

        echo "<br><br>";

        // Sorting Ascending
        $cars = array("Volvo","BMW","Toyota");
        sort($cars);

        $clength = count($cars);
        for($x=0; $x < $clength; $x++)
        {
            echo $cars[$x];
            echo "<br>";
        }

        echo "<br><br>";

        // Sorting ascending pada angka
        $numbers = array(4,6,2,22,11);
        sort($numbers);
        $arrlength = count($numbers);
        for($x=0; $x < $arrlength; $x++)
        {
            echo $numbers[$x];
            echo "<br>";
        }

        echo "<br><br>";

        // Sorting descending
        $cars=array("Volvo","BMW","Toyota");
        rsort($cars);
        $clength=count($cars);
        for($x=0;$x<$clength;$x++)
        {
        echo $cars[$x];
        echo "<br>";
        }

        echo "<br><br>";

        // Sorting descending pada angka
        $numbers=array(4,6,2,22,11);
        rsort($numbers);
        $arrlength=count($numbers);
        for($x=0;$x<$arrlength;$x++)
        {
        echo $numbers[$x];
        echo "<br>";
        }

        echo "<br><br>";

        // Date dan Time PHP5
        echo "Today is " . date("Y/m/d") . "<br>";
        echo "Today is " . date("Y.m.d") . "<br>";
        echo "Today is " . date("Y-m-d") . "<br>";
        echo "Today is " . date("l");

        echo "<br><br>";
        echo "&copy 2010 - ". date("Y");

    ?>
</body>
</html>