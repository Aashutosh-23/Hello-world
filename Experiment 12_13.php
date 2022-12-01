
<?php

    // $a1 = array(1, 2, 3, 4, 5);
    // $a2 = array(19, 21, 30, 40, 5);
    // echo "Array 1: ";
    // foreach($a1 as $x){
    //     echo $x; 
    // }
    // echo "<br>";
    // echo "Array 2: ";
    // foreach($a2 as $y){
    //     echo $y;
    // }
    // echo "<br>";
    // $a3 = array_intersect($a1, $a2);
    // echo "Intersect: ";
    // foreach($a3 as $m){
    //     echo $m;
    // }

        $a = array(
            "BCA" => array("201", " ", "Himani"," ", "30"), 
            "B Tech" => array("202"," ",  "Aastha", " ", "40"), 
            "BBA" => array("203", " ", "Aashutosh", " ", "50"), 
        );
        foreach ($a as $x){
            foreach($x as $y){
                echo $y;
            }
            echo "<br>";
        }


?>