<?php
session_start();
session_regenerate_id();
$conn =mysqli_connect("localhost","root","toor","ritu");
$_SESSION['login']=false;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
        <h1>Login..</h1>
<form action="" METHOD="POST">
Email/Username: <input type="text" name="username">
        <br><br>
        Password:       <input type="password" name="password">

        <br><br>
        <input type="submit" value="Login">
</form>

<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
    if(isset($_POST['username']) && !empty($_POST['username']) && isset($_POST['password']) && !empty($_POST['password'])){

        $username=$_POST['username'];
        $password=$_POST['password'];

        $sql="SELECT * FROM `user` WHERE `username`='$username' OR `email`='$username' AND `password`='$password';";
        $query=mysqli_query($conn,$sql);
        if($query && mysqli_num_rows($query)==1){
            $data=mysqli_fetch_assoc($query);
        
            $_SESSION['login']=true;
            $_SESSION['fullname']=$data['fullname'];
            header("location:main.php");
        }
        else{
            echo "Invalid Username/Password";
        }

    }
    else{
        echo "Username and password Should not be Empty";
    }
}

?>


</body>
</html>