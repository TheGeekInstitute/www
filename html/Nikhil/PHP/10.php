<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form method="post">
    full Name <input type="text" name="fullname">
    <br><br>
    Gender : <input type="radio" name="gender" value="male">Male <input type="radio" name="gender" value="female">female
    <br><br>
    Email : <input type="text" name="email">
    <br><br>
    Date of Birth : <input type="date" name="dob">
    <br><br>
    Phone : <input type="text" name="phone">
    <input type="submit" value="register">
</form>
</body>
</html>

<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
        $email=$_POST['email'];
        if(ctype_digit($_POST['phone']) && strlen($_POST['phone'])==10){
            $phone=$_POST['phone'];

            echo $email . $phone;
        }else{
            echo "Invalid Phone Number";
        }

    }
    else{
        echo "Invalid Email";
    }
}
?>