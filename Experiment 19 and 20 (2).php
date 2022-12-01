<?php
    session_start();
    $error = "";

    if (isset($_REQUEST['submit'])) {
        if (empty($_REQUEST['user_name']) && empty($_REQUEST['password'])){
            $error= "the username or password is invalid";
            echo $error;
        }
        else {    
            $_SESSION['username'] = $_REQUEST['user_name'];
            $_SESSION['password'] = $_REQUEST['password'];

     
    }
    }
    $cookie_name = "username";
    $cookie_value1 =  $_SESSION['username'];
    echo "<br>";
    setcookie($cookie_name, $cookie_value1,time()+ (86400*7));
    print_r($cookie_value1);


    $cookie_pass = "password";
    $cookie_value2 =  $_SESSION['password'];
    echo "<br>";
    setcookie($cookie_pass, $cookie_value2,time()+ (86400*7));
    print_r($cookie_value);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Experiment 19 and 20 (2)</title>
</head>
<body>
<p>Name: Simar</p>
    <p>Roll number: 2110992742</p> <br><br>
    <p>
		<label> Home page <a href="SESSION.php"><input value="home page" name="home_page" type="submit"/></a></label>
	</p>

    <p>
        <label> logout <a href="logout.php"><input value="sign OUT" name="logout" type="submit"/></a></label>
    </p>

</body>
</html>