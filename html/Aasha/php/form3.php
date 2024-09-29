<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form3</title>
</head>
<body>
    <form action="" method="post">
        name:<input type="text" name="name">
        <br></br>
        dob:<input type="date" name="dob">
        <br></br>
<input type="number" name="phone">
<br></br>
<input type="radio" name="gender">
<label>female</label>
<br></br>
<input  type="radio" name="gender">
<label>male</label>
<br></br>
<input  type="text" name="password">
<label>password</label>
<br></br>


        <input type="submit">


    </form>
    
</body>
</html>

<?php


if(isset($_POST['name']) && isset($_POST['dob']) && isset($_POST['phone'])&& isset($_POST['gender'])&& isset($_POST['name']))

{
    $name=$_POST['name'];
    $dob=$_POST['dob'];
    $phone=$_POST['phone'];
    $gender=$_POST['radio'];
    echo  '<hi style="color:red;"> hi, '.$name.'
    your dob' .$dob . $phone .$gender .$password;
}



?>
