<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method = "POST">
        <label for="number">Enter the length: </label>
        <input type="number" placeholder = "Enter the length" name = 'length1'>
   
        <label for="number">Enter the breadth: </label>
        <input type="number" placeholder = "Enter the breadth" name = 'length2'>
        <button>SUBMIT</button>

    </form>
    <?php
    $num1 = $_POST['length1'];
    $num2 = $_POST['length2'];

    echo "Area of rectangle is: ";
    echo $num1 * $num2;
    ?>

</body>
</html>


