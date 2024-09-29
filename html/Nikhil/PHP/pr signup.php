<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
</head>
<body>
    <h1>Signup...</h1>
    <form method="post">
        
        Email : <input type="email" name="email"placeholder="Enter Your Email ID">
        <br><br>
        Password: <input type="password"  name="password"placeholder="Enter Your Password">
        <br><br>
          <input type="submit" value="Signup">
          <hr>
          <br>
    </form>
</body>
</html>

<?php
if(isset($_POST['email'])&& $_POST['password']){
    $email=$_POST['email'];
    $password=$_POST['password'];
    $cred=$email.$password;
    $pointer=fopen("data.txt","a");
    $result=fwrite($pointer,$cred."\n");
    fclose($pointer);
    if($result){
        echo "registered succesfully";
    }
    else{
        echo "Can not Register at This time";
    

    }
}

?>
