<?php

// if(isset($_POST['Fname']) && isset($_POST['Lname']) && isset(isset($_POST['number']) && isset($_POST['dob'])){
//     var_dump("hllo world");
// }
if(isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['number']) && isset($_POST['dob'])){
    
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $num = $_POST['number'];
    $dob = $_POST['dob'];


    $fptr = fopen("data.txt","a");
    fwrite($fptr , "First Name : ");
}
    fclose($fptr)


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        First name :<input type="text" name="fname" placeholder="Enter Your First Name">
        <br><br>
        Last name :<input type="text" name="lname" placeholder="Enter your last name">
        <br><br>
        Your numebr :<input type="number" name="number" placeholder=
        "Enter your age">
        <br><br>
        Date-of-birth : <input type="date" name="dob">
        <br><br>
        <input type="submit">
    </form>
    <br><br><br><br>
    <fieldset>
        <legend>Your Information</legend>
    </fieldset>
</body>
</html>