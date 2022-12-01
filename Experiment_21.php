<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<p>Name: Simar</p>
    <p>Roll number: 2110992742</p> <br><br>
    <form method = "POST">
        <label for="name">TO</label> 
        <input type="text" name = "sub"> <br>
        <label for="name">Message: </label> <br>
        <textarea name="msg" cols="30" rows="10" placeholder = "Enter the text here"></textarea> <br>
        <input type="SUBMIT" value = "SUBMIT" name = "SUBMIT">
    </form>
</body>
<?php
    if(isset($_POST["SUBMIT"])){
        $to = $_REQUEST['to'];
        $sub = $_REQUEST['sub'];
        $msg = $_REQUEST['msg'];
        if(mail($to, $sub, $msg)){
            echo "Mail sent";
        }
        else{
            echo "Mail not sent";
        }
    }


?>
</html>