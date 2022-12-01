<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Experiment 17 and 18</title>
</head>
<body>
<p>Name: Simar</p>
    <p>Roll number: 2110992742</p> <br><br>
    <form action="" enctype = "multipart/form-data" method = "POST">
        <label for="name">Upload your document by clicking upload</label><br>
        <input type="file" name = "image" id = "image"><br>
        <input type="Submit" value = "upload"><br>
        
    </form>
    <?php
    $destination  = "Photo/".$_FILES['image']['name'];


    ?>
</body>
</html>


