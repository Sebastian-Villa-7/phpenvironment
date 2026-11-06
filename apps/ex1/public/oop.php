<?php include_once "../includes/student.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP and Classes</title>
    <?php include "../includes/styles.php" ?>
</head>

<body>
    <h1>OOP and Classes</h1>
    <a href="index.php">Home</a>
    <a href="dates.php">Dates</a>
    <a href="strings.php">Strings</a>
    <a href="constants.php">Constants</a>
    <a href="functions.php">Functions</a>
    <a href="ifstatements.php">If Statements</a>

    <div>
        <?php
            $student1 = new Student("Sebastian", "Villa");

            echo "<div>First Name : $student1->firstName</div>";
            echo "<div>Last Name : $student1->lastName</div>";
            echo "<div>Full Name : " .$student1->getFullName(). "</div>";

            $student2 = new Student("Peter", "Parker");
            $student3 = new Student("Barry", "Allen");
            $student4 = new Student("Kazuto", "Kirigaya");

            $students = [$student1, $student2, $student3];

            array_push($students, $student4);
        ?>

        <ol>
            Using FOR:
            <?php
                for( $i = 0; $i < count($students); $i++ ) 
                {
                    echo "<li>" .$students[$i]->getFullName(). "</li>";
                }
            ?>
        </ol>

        <ul>
            Using FOREACH:
            <?php
                foreach($students as $student)
                {
                    echo "<li>". $student->getFullName() ."</li>";
                }
            ?>
        </ul>

    </div>
</body>

</html>