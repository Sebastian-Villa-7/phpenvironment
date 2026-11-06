<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Constants</title>
    <?php include "../includes/styles.php" ?>
</head>

<body>
    <h1>Constants</h1>
    <a href="index.php">Home</a>
    <a href="dates.php">Dates</a>
    <a href="strings.php">Strings</a>
    <a href="functions.php">Functions</a>
    <a href="ifstatements.php">If Statements</a>
    <a href="oop.php">OOP</a>
    <div>
        <?php
            define("COLLEGE","NBCC");
            define("CAMPUS","MONCTON");
            // define("CAMPUS","FREDERICTON"); We cannot reassign constants
            define("MARGIN",0.05); // 5%

            const TAX_RATE = 0.15;
            const MAX_STUDENTS = 30;
            const ADDRESS = "1234 Mountain Road";
        ?>
        <h1>I am studying at <?= COLLEGE ?> <?= CAMPUS ?>.</h1>
        <div>
            Tax Rate: <?= TAX_RATE ?> <br>
            Max Students: <?= MAX_STUDENTS ?> <br>
            Margin: <?= MARGIN ?> <br>
            Address: <?= ADDRESS ?>
        </div>
    </div>
</body>

</html>