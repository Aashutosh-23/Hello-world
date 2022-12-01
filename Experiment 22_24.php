    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Experiment 22 and 24</title>
    </head>
    <body>
    <p>Name: Simar</p>
    <p>Roll number: 2110992742</p> <br><br>
        <form method = "POST">
            <label for="name">ID: </label>
            <input type="text" placeholder = "Enter your ID" name = "id"> <br><br>

            <label for="name">Username: </label>
            <input type="text" placeholder = "Enter your Username" name = "user"> <br><br>

            <label for="name">Password: </label>
            <input type="password" placeholder = "Enter your Password" name = "pass"> <br><br>

            <label for="name">Address: </label>
            <input type="text" placeholder = "Enter your Address" name = "address"> <br><br>

            <label for="name">Phone number: </label>
            <input type="text" placeholder = "Enter your Phone number" name = "mobile"> <br><br>

            <label for="name">Date of Birth: </label>
            <input type="text" placeholder = "Enter your Date of Birth" name = "dob"> <br><br>

            <label for="name">Hobbies: </label>
            Reading
            <input type="checkbox" placeholder = "Enter your Date of Birth" name = "reading"> 
            Cycling
            <input type="checkbox" placeholder = "Enter your Date of Birth" name = "cycling"> 
            Dancing
            <input type="checkbox" placeholder = "Enter your Date of Birth" name = "dancing"> 

            <br><br>
            <label for="name">Gender: </label>

            Male
            <input type="radio" name = "gender"> 
            Female
            <input type="radio" name = "gender"> 
            Other
            <input type="radio" name = "gender"> 
            <br><br>

            <label for="name">Country: </label>

            <select name="country">
                <option value="INDIA">INDIA</option>
                <option value="CANADA">CANADA</option>
                <option value="USA">USA</option>
                <option value="CHINA">CHINA</option>
            </select> 
        <input type="submit" name = "reset" value = SUBMIT>

        </form>
    </body>
    </html>
    <?php
        if(isset($_REQUEST['submit'])){
            $id = $_REQUEST['id'];
            $user = $_REQUEST['pass'];
            $add = $_REQUEST['address'];
            $mob = $_REQUEST['mobile'];
            $dob = $_REQUEST['dob'];
            $gender = $_REQUEST['gender'];
            $cycle = $_REQUEST['cycle'];
            $read = $_REQUEST['read'];
            $dance = $_REQUEST['dance'];
            $hobbies = $_REQUEST['hobbies'];
            $country = $_REQUEST['country'];
            $hobbies = "$cycle. "; ".$read."; "$dance";
            $can = mysqli_connect("localhost", ".root", " ", "php");
        }
        $sql = "Insert into student value($id, $user, $pass, $add, $mob, $dob, $gender, $cycle, $country)";
        $result = mysql_query($can, $sql) or die (mysql_error);
        if($result){
            echo "Registration is done successfully";
        }
        else{
            echo "Registration is not done successfully";
        }


    ?>