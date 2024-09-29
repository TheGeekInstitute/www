<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup Pr.stmt</title>
</head>
<body>
    <h1>Sign_up...</h1>
    <fieldset>
        <legend>Sign_up...</legend>
    <form method="post">
    Full Name:<input type="text" name="name" placeholder=" Enter your fullname"><br><br>
     User Name:<input type="text" name="username" placeholder="Enter username"><br><br>
     Email:<input type="email" placeholder="Enter Your Email" name="email"><br><br>
     Password:<input type="password" name="password" placeholder="Enter Your Password"><br><br>
     <input type="submit" name="submit">
    </fieldset>


    </form>
    <a href="./login prstmt.php">Login</a><br><br>
    
</body>
</html>

<?php
$conn=mysqli_connect("localhost","root","toor","Ritu");
if($_SERVER['REQUEST_METHOD']=="POST"){
    if(!empty($_POST['name'])){
        $name=$_POST['name'];
          if(!empty($_POST['username'])){
            $username=$_POST['username'];
            if(!empty($_POST['email'])){
                $email=$_POST['email'];
                    if(!empty($_POST['password'])){
                        $password=password_hash($_POST['password'],PASSWORD_BCRYPT);
                        $sql="INSERT INTO `users`( `fullname`, `username`, `email`, `password`) VALUES (?,?,?,?)";
                        $stmt=mysqli_prepare($conn,$sql);
                        mysqli_stmt_bind_param($stmt,"ssss",$name,$username,$email,$password);
                        mysqli_stmt_execute($stmt);
                        mysqli_stmt_store_result($stmt);
                        if(mysqli_stmt_affected_rows($stmt)==1){
                            echo "Registration Successfully";
                        }
                    }
                    else{
                        echo "Password should not be empty";
                    }
            }
            else{
                echo "Email should not be empty";
            }
          }
          else{
            echo "username should not be empty";
          }
    }
    else{
        echo "Name should not be empty";
    }
}

mysqli_close($conn);
?>