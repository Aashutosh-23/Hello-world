<?php
print "<form method = POST>";       //Starting of the form

for($i = 0; $i<=5; $i++){
// txt ke alaawa hm kuch bhi le skte hai 
    print "<input type = text name = txt$i>";   // This is made for taking input
}

    print "<input type = submit value = SUBMIT>";        //Made a button
    
    print "</form>";
    
    $arr = array(); //Name given to the array 
    // if(isset($_POST['txt0']))    //This is not necesary
   { 
    for($i = 0; $i<5; $i++)
        $arr[$i] = $_POST['txt'. $i];   //To take the input 
        print_r($arr);  //Array ko print krvaane ke liye 
    
   }
    
