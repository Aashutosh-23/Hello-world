<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Swapping without using third variable</title>
</head>
<body>
    <form action="" method = "REQUEST">
        <label for="number">Enter number 1: </label>
        <input type="number" placeholder = "Enter number 1" name = "number1"> <br> <br>

        <label for="number">Enter number 2: </label>
        <input type="number" placeholder = "Enter number 2" name = "number2"> <br><br><br>

        <button>Submit</button>

        
    </form>

    <?php

    $a = $_REQUEST['number1'];
    $b = $_REQUEST['number2'];

    echo "Numbers before swapping are: " ;
    echo "<br>";    
    echo $a;
    echo "<br>";
    echo $b;
    

    echo "<br>";
    $a = $a*$b;
    $b = $a/$b;
    $a = $a/$b;

    echo "Numbers after swapping are: ";
    echo "<br>";
    echo $a;
    echo "<br>";
    echo $b;


    ?>
</body>
</html>