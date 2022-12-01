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
    <?php

    session_start();
    session_unset();
    echo "THE SESSION HAS BEEN DESTROYED";
    echo "YOU HAVE SIGNED OUT";
    exit;

    ?>
</body>
</html>