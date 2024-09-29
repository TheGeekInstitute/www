<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Login....</h1>
    <form method="post">
        Email : <input type="email" name="email"placeholder="Enter Your Email ID">
        <br><br>
        Password : <input type="password" Placeholder="Enter Your Password" name="password">
        <br><br>
        <input type="submit" value="Login">
        <br><br>
    </form>
</body>
</html>
<?php

$login="";
if(isset($_POST['email'] )&& isset($_POST['password'] )){
    $email=$_POST['email'];
    $password=$_POST['password'];

    $pointer=fopen("data.txt" ,"r");
    while(!feof($pointer)){
        if(fgets($pointer)==$email.$password){
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

if($login){
    echo "Loggedin";

}
else{
    echo "Incorrect Password";
}
?>
