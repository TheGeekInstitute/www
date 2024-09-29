<?php
// $name=$gender=$mobile=$email=$password;
if(isset($_POST['email']) && isset($_POST['password'])){
    // $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];

    $abs=fopen("cred.txt", "a");
    fwrite($abs,$email.$password."\n");
 

    fclose($abs);

}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="21.php" method="POST" enctype="multipart/form-data">
   Email : <input type="email" name="email"><br><br>
   Password : <input type="password" name="password"><br><br>
    <input type="submit"  value="Sign Up">


    </form>
    
</body>
</html>