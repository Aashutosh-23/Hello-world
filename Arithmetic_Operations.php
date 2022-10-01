<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arithmetic Operations</title>
</head>
<body>
    <form action="" method = "POST">
        <label for="number">Enter the number: </label>
        <input type="number" placeholder = "Enter the number" name = 'number1'>
        <br>
        <br>
        <label for="operator">Enter the operator: </label>
        <input type="operator" placeholder = "Enter the operator" name = 'number3'>
        <br>
        <br>
        <label for="number">Enter the number: </label>
        <input type="number" placeholder = "Enter the number" name = 'number2'>
        
        <br><br>

        <button>SUBMIT</button>
    </form>
    <?php
    $num1 = $_POST['number1'];
    $num2 = $_POST['number2'];
    $num3 = $_POST['number3'];


    switch($num3){
        case '+':
            echo "The answer is: ";
            echo $num1 + $num2;
            break;
        case '-':
            echo "The answer is: ";
            echo $num1 - $num2;
            break;
        case '/':
            echo "The answer is: ";
            echo $num1 / $num2;
            break;
        case '*':
            echo "The answer is: ";
            echo $num1 * $num2;
            break;
        case '%':
            echo "The answer is: ";
            echo $num1 % $num2;
            break;
    }
    ?>
</body>
</html>