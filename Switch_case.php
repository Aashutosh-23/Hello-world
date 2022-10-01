<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch case in PHP</title>
</head>
<body>
    <form method = "POST">
        <label for="number">Enter the number: </label>
        <input type="number" placeholder = "Enter the number" name = 'banana'>
        <button>SUBMIT</button>

    </form>
    
<?php   
    $age = $_POST['banana'];

  
   
        
             
        for($i = 0; $i<20; $i++){
            echo "Your age is $age";
            break;
        }

    
?>
</body>
</html>