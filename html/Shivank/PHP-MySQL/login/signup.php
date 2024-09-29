<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Signup</h1>

    <form action="" method="post">
        Full Name : <input type="text" name="fullname">
        <br><br>
        Username : <input type="text" name="username">
        <br><br>
        Email : <input type="email" name="email">
        <br><br>
        Password : <input type="password" name="password">
        <br><br>
        <input type="submit" value="Signup">
    </form>
</body>
</html>

<?php
$conn=mysqli_connect("localhost","root","toor","Shivank");
if($_SERVER['REQUEST_METHOD']=="POST"){
if(isset($_POST['fullname']) && !empty($_POST['fullname'])){
    $fullname=$_POST['fullname'];
    if(isset($_POST['username']) && !empty($_POST['username'])){
        $username=$_POST['username'];
        if(isset($_POST['email']) && !empty($_POST['email'])){
            $email=$_POST['email'];
            if(isset($_POST['password']) && !empty($_POST['password'])){
                $password=password_hash($_POST['password'],PASSWORD_BCRYPT);

                $sql="INSERT INTO `users`(`fullname`, `username`, `email`, `password`) VALUES ('$fullname','$username','$email','$password')";
                if(mysqli_query($conn,$sql)){
                    echo "Registered Successfully";
                }
                else{
                    echo "Failed";
                }
            }
            else{
                echo "Please Enter Password";
            }
        }
        else{
            echo "Please Enter Email Address";
        }
    }
    else{
        echo "Please Enter Username";
    }
}
else{
    echo 'Please Enter Full Name';
}
}

?>