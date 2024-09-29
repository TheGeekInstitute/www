<?php

$login="";
if(isset($_POST['email'] )&& isset($_POST['psw'] )){
    $email=$_POST['email'];
    $psw=$_POST['psw'];

    $pointer=fopen("data.txt" ,"r");
    while(!feof($pointer)){
        if(fgets($pointer)==$email.$psw){
            $login=true;
            break;
        }
        else{
            $login=false;
            break;
        }
        fclose($pointer);
    }
    
}
    
?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login code...</title>
</head>
<body>
    <form method="POST">
       Email : <input type="email" placeholder="Enter User email" name="email"> <br> <br>
       Password : <input type="password" name="psw" placeholder="Enter YOur passwrod"> <br> <br>
       <input type="submit" value="Login"> <br><br>
       <input type="checkbox"  checked="checked" name="remember">Remember me

    </form>
    
</body>
</html>
