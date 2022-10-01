<?php
// $num = 2;
// for($i = 1; $i<=10; $i++){
//     $product = $num * $i;
//     echo "$num * $i = $product";
//     echo "<br>";
    
// }

// for($default = 1; $default<=10; $default++){
//     echo "Table of $default";
//     echo "<br>";
//     for($i = 1; $i<=10; $i++){
//         $product = $default * $i;
//         echo "$default * $i = $product";
//         echo "<br>";
//     }
// }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication Table</title>
</head>
<body>
    <form method = "POST">
        <label for="number">Enter the number</label>
        <input type="number" placeholder = "Enter the number" name = "number">
        <button>SUBMIT</button>
    </form>
    <?php
    $num = $_POST['number'];
    for($i = 1; $i<=10; $i++){
        $product = $num * $i;
        echo "$num * $i = $product";

        echo "<br>";
    }


?>
</body>
</html>