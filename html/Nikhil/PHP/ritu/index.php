<?php
session_start();
if(isset($_SESSION['login']) && isset($_SESSION['name'])&& $_SESSION['login']==true)
{
    header("location:main.php");
}
else{
    $_SESSION['login']=false;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign_up</title>
</head>
<body>
    <!-- <div class="main1"> -->

    <h1>Sign up...</h1>
    <div class="main">
    <fieldset>
        <legend>Sign up</legend>
    <form method="post">
        Full Name: <input type="text" placeholder="Please Enter Your Full Name" name="name">
        <br><br>
        User Name: <input type="text"placeholder="Please Enter User Name" name="username">
        <br><br>
        Email: <input type="email"placeholder="Please Enter Your Email" name="email">
        <br><br>
        Password: <input type="password"placeholder="Please Enter Your Password" name="password">
        <br><br>
        <input type="submit" value="signup">
        

    </form>
    </fieldset>
    </div>
    
    <a href="./login.php">Login</a>
</body>

</html>

<?php
$conn = mysqli_connect("localhost","root","toor","Ritu");
if($_SERVER['REQUEST_METHOD']=="POST"){
    if(!empty($_POST['name'])){
        $name=$_POST['name'];
        if(!empty($_POST['username'])){
            $username=$_POST['username'];
            if(!empty($_POST['email'])){
                $email=$_POST['email'];
                if(!empty($_POST['password'])){
                    $password=$_POST['password'];
                    $sql="SELECT * FROM `users` WHERE `username`='$username' OR `email`='$email'";
                    $query=mysqli_query($conn,$sql);
                    $num=mysqli_num_rows($query);
                    if($num==1){
                        $data=mysqli_fetch_assoc($query);
                        if($data['username']==$username){
                            echo "Username Already Taken";
                        }
                        else{
                            echo "Email Already registered";
                        }
                    }
                    else{
                        $sql="INSERT INTO `users`(`fullname`, `username`, `email`, `password`) VALUES ('$name','$username','$email','$password')";
                        $query=mysqli_query($conn,$sql);
                        if($query){
                            echo "Regstration Successfull";
                        }

                    }


                }
                else{
                    echo 'Plesae enter your password';
                }
            }
            else{
                echo 'Please Enter your email';
            }
        }
        else{
            echo 'Username Should not be empty';
        }
    }
    else{
        echo 'Name should not be empty';
    }
}

mysqli_close($conn);
?>