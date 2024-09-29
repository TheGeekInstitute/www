<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        First Name: <input type="text" name="firstname">
        <br><br>
        Last Name: <input type="text" name="lastname">
        <br><br>
        <input type="submit">
    </form>
    
</body>
</html>

<?php
if(isset($_POST['firstname'])  && isset($_POST['lastname'])){
    if(!empty($_POST['firstname'])){
        $firstname=$_POST['firstname'];
        if(!empty($_POST['lastname'])){
            $lastname=$_POST['lastname'];

            echo "Hi,". $firstname. $lastname;
        }
        else{
            echo "Please enter your last name";
        }
    }
    else{
        echo " Please enter your first name";
    }
}





?>