<?php
    echo "<b>Name: Aashutosh Bajaj</b>";
    echo "<br>";
    echo "<b>Roll number: 2110992707</b>";
    echo "<br>";
    echo "Arrays are: ";
    $a1=array(1,1,2,3,4);
    echo "<pre>";
    print_r($a1);
    echo "<pre>";
    echo "<br>";
    $a2=array(2,3,4,5,6);
    print_r ($a2);
    echo "<h3>Common elements are displayed below: </h3>";
   
    $x=array_intersect($a1,$a2);
    $len2=count($x);
    foreach($x as $temp)
    {
        
        echo $temp;
        echo "<br>";
    }
?>