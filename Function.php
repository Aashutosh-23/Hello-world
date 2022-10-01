<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions</title>
</head>
<body>
    <form action="" method = "POST">
        <label for="number">Enter the number</label><br>
        <input type="number" placeholder = "Enter the number" name = "factorial">
        <button>Submit</button>

    </form>
<?php
$num = $_POST['factorial'];
function factorial($num){
    $fact = 1;
    for($a = 1; $a<=$num; $a++){ // 4 
            $fact = $fact * $a;
        }
        echo $fact;
    }
    $f = factorial($num);
    echo $f;