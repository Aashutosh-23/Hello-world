<?php

print"Enter array 1";
print"<form method =POST>";
for ($i=0; $i < 5; $i++) 
    print"<input type=text name=text$i>";
   






print"Enter array 2";
print"<form method =POST>";
for ($i=0; $i < 5; $i++) 
    print"<input type=text name=text2$i>";
   



print"<input type=submit value=submit>";
print "</form>";


$arr1=array();
{
    for ($i=0; $i <5 ;  $i++) 
        $arr1[$i]=$_POST['text'.$i] ;
        
        print_r($arr1);
    
    
}
$arr2=array();
{
    for ($i=0; $i <5 ;  $i++) 
        $arr2[$i]=$_POST['text2'.$i] ;
        print_r($arr2);
    
    
}
$arr=array_intersect($arr1,$arr2);
print_r($arr);
?>

// $a3=array_merge($a1,$a2);
    // $len=count($a3);
    // for($i=0;$i<$len;$i++)
    // {
    //     echo $a3[$i];
    //     echo "<br>";
    // }