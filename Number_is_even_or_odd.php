<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Number is even or odd</title>
</head>
<body>
    <form method = "POST">
        <label for="number">Enter the number</label>
        <input type="number" placeholder = "Enter the number" name = 'even'>

        <button>SUBMIT</button>

    </form>
    <?php
    $num1 = $_POST['even'];

    if($num1 % 2 == 0){
        echo "The number is even";
    }
    else{
        echo "The number is odd";
    }
    ?>
</body>
</html>