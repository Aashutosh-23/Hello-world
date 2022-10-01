<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>How to use IF ELSE statement</title>
</head>
<body>
    <form method = "POST">
        <label for="number">Enter the number: </label>
        <input type="number" placeholder = "Enter the number" name = "IF_ELSE">

        <button>SUBMIT</button>
    </form>
    <?php

    $num1  = $_POST['IF_ELSE'];

    if($num1 >= 10){
        echo "The number is greater than 10";

    }
    else if($num1 < 10){
        echo "The number is less than 10";
    }
    else{
        echo "Invalid number";
    }


    ?>
</body>
</html>