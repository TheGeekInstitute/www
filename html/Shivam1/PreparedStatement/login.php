<?php

require(db.php);

if($_SERVER['REQUEST_METHOD']=="POST"){
    if(isset($_POST['username']) && !empty($_POST['username'])){
        $uername=$_POST['username'];
    if(isset($_POST['password']) && !empty($_POST['password'])){
        $password=password_hash(mysqli_real_escape_string($connection,$_POST['password']), PASSWORD_BCRYPT);}


}




?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="" method="POST">
        Username :
        <input type="text" name="username" >
        <br><br>
        Password :
        <input type="password" name="password" >
        <br><br>
        <input type="submit" value="Login">

    </form>

    <br><br>

    <p><?php 
        // if($error==true){
        //     echo $msg;
        // }

    ?></p>

    <br><br>

    <a href="./index.php">Signup Here</a>
</body>
</html>