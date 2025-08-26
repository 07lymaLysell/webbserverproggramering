<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Metod</title>
</head>
<body>
    <h1>Antal år kvar till pension</h1>
    <?php
        $name = $_POST['name'];
        $age = $_POST['age'];
        function pension($age){
            $retirementAge = 65;
            $yearsLeft = $retirementAge - $age;
            return $yearsLeft;
        }
        $yearsLeft = pension($age);
        echo "<p>$name, du har $yearsLeft år kvar till din pension.</p>";
    ?>
</body>
</html>