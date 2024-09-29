<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
</head>
<body>
    <form method="post">
        <!-- Name : <input type="text" name="name"> -->
        <br><br>
        Email : <input type="email" name="email">
        <br><br>
        Password: <input type="password"  name="password">
        <br><br>
          <input type="submit" value="Signup">
    </form>
</body>
</html>


<?php
if( isset($_POST['email']) && isset($_POST['password'])){
    // $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $cred=$email.$password;
    $pointer = fopen("data.txt","a");
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