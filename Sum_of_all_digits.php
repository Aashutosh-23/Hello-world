<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sum of all digits</title>
</head>
<body>
    <form method = "POST">
        <label for="number">Enter the number</label>
        <input type="number" placeholder = "Enter the number" name = 'name1'>
        <button>SUBMIT</button>
    </form>
    <?php

    $num1 = $_POST['name1'];
    $sum = 0;
    while($num1>0){
        $d = $num1 % 10;
        $sum = $sum + $d;
        $num1 = $num1 / 10;
    }
    echo "The sum of digits will be $sum";



    ?>
</body>
</html>