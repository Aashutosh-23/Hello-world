<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Square of a number</title>
</head>
<body>
    <form method = "POST">
        <label for="number">Enter the number</label>
        <input type="number" placeholder = "Enter the number" name = "square">

        <button>SUBMIT</button>
    </form>


    <?php
    $num = $_POST['square'];
    $square = $num * $num;
    echo "The square of $num will be $square.";
    ?>
</body>
</html>