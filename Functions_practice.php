<?php

    echo "<b>FUNCTIONS</b>";
    echo "<br>";
    $num1 = 20; 
    $num2 = 10; 
    function sum($num1, $num2){
        return $num1 + $num2;
    }
    sum($num1, $num2);

    echo "The sum of $num1 and $num2 is: ";
    echo sum(20, 10);
?>