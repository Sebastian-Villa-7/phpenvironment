<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions</title>
    <?php include "../includes/styles.php" ?>
</head>

<body>
    <h1>Functions</h1>
    <a href="index.php">Home</a>
    <a href="dates.php">Dates</a>
    <a href="strings.php">Strings</a>
    <a href="constants.php">Constants</a>
    <a href="ifstatements.php">If Statements</a>
    <a href="oop.php">OOP</a>
    <?php
    /**
     * Summary of add
     * @param int|float $x Value 1
     * @param int|float $y Value 2
     * @return float|int The sum of the two values
     */
    function add(int|float $x, int|float $y): int|float
    {
        return $x + $y;
    }

    function subtract(int|float $x, int|float $y): int|float
    {
        return $x - $y;
    }

    function multiply(int|float $x, int|float $y): int|float
    {
        return $x * $y;
    }

    function divide(int|float $x, int|float $y): int|float
    {
        return $x / $y;
    }

    function modulo(int|float $x, int|float $y): int|float
    {
        return $x % $y;
    }

    ?>
    <div>
        3 + 4 = <?= add(3, 4) ?> <br>
        3 - 4 = <?= subtract(3, 4) ?> <br>
        3 * 4 = <?= multiply(3, 4) ?> <br>
        3 / 4 = <?= divide(3, 4) ?> <br> <!-- Division by 0 throws error -->
        3 % 4 = <?= modulo(3, 4) ?>
    </div>
</body>

</html>