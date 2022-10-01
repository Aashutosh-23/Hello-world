<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Armstrong Number or not</title>
</head>
<body>
    <form method = "POST">
        <label for="number">Enter the number</label>
        <input type="number" placeholder = "Enter the number" name = 'armstrong'>
        <button>SUBMIT</button>
    </form>
    <?php
    $num = $_POST['armstrong']
    $num1 = $num;
    while($num>0){
        $d = $num % 10;
        $sum = $sum + pow($d, 3);
        $num = $num / 10;
    }
    if($sum == $num1){
        echo "The number is armstrong";
    }
    else{
        echo "The number is not armstrong";
    }
    ?>
</body>
</html>