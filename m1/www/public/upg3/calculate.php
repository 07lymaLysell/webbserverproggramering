<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkylator</title>
</head>
<body>
        <h1>Kalkylator test</h1>
    <?php
            $num1 = $_POST['n1'];
            $num2 = $_POST['n2'];
            $sum = $num1 + $num2;
            echo "<p>$num1 + $num2 = $sum</p>";

    ?>
    
</body>
</html>