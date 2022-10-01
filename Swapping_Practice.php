<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Swapping Practice</title>
</head>
<body>
    <form method = "POST">
        <p>Enter the two numbers: </p>
        <label for="number">Enter the number: </label>
        <input type="number" placeholder = "Enter the number" name = 'input1'>
        <label for="number">Enter the number: </label>
        <input type="number" placeholder = "Enter the number" name = 'input2'>
        <button>SUBMIT</button>

    </form>
    <?php
    $num1 = $_POST['input1'];
    $num2 = $_POST['input2'];
    echo "Two numbers before swapping are: $num1 and $num2";
    echo "<br>";

    $num1 = $num1 * $num2;
    $num2 = $num1 / $num2;
    $num1 = $num1 / $num2;

    echo "Two numbers after swapping are: $num1 and $num2";


    ?>
</body>
</html>