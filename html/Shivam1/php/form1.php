<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
<form action="" method="POST">
        <label for="">Full Name :</label>
        <input type="text" name="name"> <br> <br>
        <label for="">Gender : </label>
        <label for="">Male</label>
        <input type="radio" name="gender" id="" value="Male">
        <label for="">Female</label>
        <input type="radio" name="gender" id="" value="Female"> <br> <br>
        <label for="">Date of Birth :</label>
        <input type="date" name="DOB" id=""> <br> <br>
        <label for="">Phone Number: </label> 
        <input type="number" name="phoneno" id=""> <br> <br>
        <label for="">Email id: </label>
        <input type="email" name="email" id=""><br> <br>
        <input type="submit" value="Show">
    </form>

</body>
</html>
<?php

if(isset($_POST["name"])
&& isset($_POST["gender"])
&& isset($_POST["DOB"])
&& isset($_POST["phoneno"])
&& isset($_POST["email"])){

    $name=$_POST['name'];
    $gender=$_POST['gender'];
    $DOB=$_POST['DOB'];
    $phoneno=$_POST['phoneno'];
    $email=$_POST['email'];

    echo 'Full Name: ' .$name. '<br>
    Gender: ' . $gender . '<br>
    Date of Birth: ' .$DOB. '<br>
    Phone No: ' .$phoneno. '<br>
    Email ID: ' .$email ;
}

?>