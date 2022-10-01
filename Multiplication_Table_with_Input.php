<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication_Table</title>
</head>
<body>
    <form method = "POST">
        <label for="number">Enter the number: </label>
        <input type="number" placeholder = "Enter the number" name = name1>

        <button>SUBMIT</button>
    </form>
    <?php
    $num1 = $_POST['name1'];

    for($i = 1; $i<=10; $i++){
        $product = $num1 * $i;
        echo "$num1 * $i = $product";
        echo "<br>";
    }
    ?>
</body>
</html>