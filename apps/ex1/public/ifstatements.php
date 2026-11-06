<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If Statements</title>
    <?php include "../includes/styles.php" ?>
</head>

<body>
    <h1>If Statements</h1>
    <a href="index.php">Home</a>
    <a href="dates.php">Dates</a>
    <a href="strings.php">Strings</a>
    <a href="constants.php">Constants</a>
    <a href="functions.php">Functions</a>
    <a href="oop.php">OOP</a>

    <?php
        $x = 5;
        $y = 10;

        if ($x > $y) {
            echo "<div>$x is greater than $y</div>";
        } else {
            echo "<div>$x is NOT greater than $y</div>";
        }

        if (isset($_GET["value"])) {
            $z = $_GET["value"];

            if (is_numeric($z)) {
                if ($z > $y && $z > $x) {
                    echo "<div>The qs param $z is greater than $x and $y</div>";
                }
            } else {
                echo "<div>The query string param value $z is NOT numeric</div>";
            }
        } else {
            echo "<div>The value query string param is not set</div>";
        }
    ?>
</body>

</html>