<?php
session_start();
if($_SERVER['REQUEST_METHOD']=="POST"){
    $username=$_POST['username'];
    $pass=$_POST['pass'];
    $cred = $username.":".$pass;
    $fptr=fopen("data.txt","r");
    while(!feof($fptr)){
         if(trim($cred) == trim(fgets($fptr))){
           $_SESSION['username']=$username;
           header("location:main.php");
         }    
         else{
            $msg="Incorrect Username/Password";
        }
    }
    echo $msg;
fclose($fptr);
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
    <form method="POST">
        <input type="text" name="username">
        <br>
        <input type="password" name="pass">
        <input type="submit">
    </form>
</body>
</html>

