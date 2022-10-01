<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strings</title>
</head>
<body>
    <form method = "POST">
        <label for="name">Enter string 1: </label>
        <input type="text" placeholder = "Enter your name" name = "name1">
        <label for="name">Enter string 2: </label>
        <input type="text" placeholder = "Enter your name" name = "name2">
        <button>SUBMIT</button>
        <br><br>
    </form>

    <?php
    $string1 = $_POST['name1'];
    $string2 = $_POST['name2'];

    $string_upper = strtoupper("$string1");
    echo "<b>Upper case is: </b>";
    echo $string_upper;
    echo "<br>";
    echo "<br>";
    
    echo "<b>Lower case is: </b>";
    $string_lower = strtolower("$string1");
    echo $string_lower;

    echo "<br>";
    echo "<br>";
    // $as = strcmp($string1, $string2);
    // if ($as) {
    //     echo "Strings are not equal";
    // }
    
   
    // else{
    //     echo "Strings are equal";
    // }
    // echo "<br>";
    $compare = strcmp($string1, $string2);
    if ($compare>0) {
        echo "String 1 is greater than String 2";
    }
    
   elseif ($compare == 0){
        echo "Strings are equal";
   }
    else {
        echo "String 1 is lower than String 2";
    }
    echo "<br>";
    echo "<br>";
    
    $reverse = strrev("$string1");
    echo "<b> The reverse of the string is: </b>";
    echo $reverse;
    echo "<br>";
    echo "<br>";

    $position = strpos($string1, "name");
    echo "<b>The position of the string is: </b>";
    echo $position;

    echo "<br>";
    echo "<br>";


    $length = strlen($string1);
    echo "<b>The length of the string is: </b>";
    echo $length;




    ?>
</body>
</html>