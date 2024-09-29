<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login
    </title>
    <style>
        input[type=text]{
            background-color:aqua;
        /* }.main{/var/www/html/sohrab/PHPMailer */
        }
        .main{
            background-color:lightgrey;
        }
    </style>
</head>
<body>
    <h1>Login....</h1>
    <div class="main">
    <fieldset>
        <legend>Login</legend>
<form method="post">
    Username/Email: <input type="text" name="username" placeholder="Please Enter Your Username/Email">
    <br><br>
    Password: <input type="text" name="password"placeholder="Please Enter Your Password ">
    <br><br>
    <input type="submit" value="login">
</form>
</fieldset>
</div>
<hr>
</body>
</html>
<?php
$conn=mysqli_connect("localhost","root","toor","Ritu");
if($_SERVER['REQUEST_METHOD']=='POST'){
    if(!empty($_POST['username'])){
        $login=$_POST['username'];

        if(!empty($_POST['password'])){
            $password=$_POST['password'];
         $sql="SELECT * FROM `users`where `username`=$login OR `email`=$login";
         $query=mysqli_query($conn,$sql);
         if($query){
             
         $num=mysqli_num_rows($query);
         if($num==1){
            $data=mysqli_fetch_assoc($query);
            if($data['password']==$password){
                echo "Hi,".$data['fullname']."Successfully Loggedin";
            }
            else{
                echo "Incorrect Password";
            }

        }
         else{
            echo "Server is busy";
         }

        }
        else{
        echo "Server is Busy";

        }
    }
    else{
     echo   "Password name should Not be empty";
    }
  }
  else{
    echo "Username name should Not be empty";
  }
}

mysqli_close($conn);
?>
