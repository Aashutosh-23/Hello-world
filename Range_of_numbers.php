<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Range of Numbers</title>
</head>
<body>
    <form method = "POST">
        <label for="number">Enter the number</label>
        <input type="number" placeholder = "Enter the number" name = "range">

        <button>SUBMIT</button>

    </form>

    <?php
    $num1 = $_POST['range'];
    for($i = $num1; $i<=10; $i++){
        echo $i;
        echo "<br>";
    }


    ?>
</body>
</html>