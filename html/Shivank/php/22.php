<?php
$login="";
if(isset($_POST['email']) && isset($_POST['password'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
  
    $abs=fopen("cred.txt", "r");
     while(!feof($abs)){
       if(fgets($abs)==$email.$password){
        $login=true;
        break;

       }
       else{
        $login=false;
        
       }

     }
   fclose($abs);
if($login){
    echo "Loggedin";
}
else{
    echo "Incorrect Password";
}
    }
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Login </title>
</head>
<body>

<form action="22.php" method="POST">
   Email : <input type="email" name="email"><br><br>
   Password : <input type="password" name="password"><br><br>
    <input type="submit" value="Log In">
  

</form>
    
</body>
</html>