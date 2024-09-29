<?php
$login=$password="";
if(isset($_COOKIE['login']) && isset($_COOKIE['password'])){
    $login=$_COOKIE['login'];
    $password=$_COOKIE[$password];
}

?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
</head>
<body>
    <h1>Login form</h1>
    <form action="" method="POST" >
        Username: <input type="text" name="login" value="<?php echo $login; ?>"><br><br>
        Password : <input type="password" name="password" value=" value="<?php echo $password; ?>""><br><br>
        <input type="checkbox" name="remember" value="true">Remember Me
        <input type="submit" value="Login">
    </form>
    
</body>
</html>
<?php
$conn=mysqli_connect("localhost","root","toor","web");
if($_SERVER['REQUEST_METHOD']=="POST"){
    if(!empty($_POST['login'])){
        $login=$_POST['login'];
        if(!empty($_POST['password'])){
            $password=$_POST['password'];
            $sql="SELECT * FROM `users` WHERE `username`='$login' OR `email`='$login'";
            $query=mysqli_query($conn,$sql);
                if(mysqli_num_rows($query)==1){
                    $data=mysqli_fetch_assoc($query);
                    if($data['password']==$password){
                        if(isset($_POST['remember'])=="true"){
                            setcookie("login",$login,time() + (86400 * 30));
                            setcookie("password",$login,time() + (86400 &30));
                        }
                        else{
                            setcookie("login","",time() - (86400 * 30));
                            setcookie("password","",time() - (86400 &30));
                        }
                        $_SESSION['name']=$data['name'];
                        header('location:main.php');
                       
                    }
                    else{
                        echo "Incorrect password";
                    }
                }
                else{
                    echo "Invalid username";
                }
        }
        else{
            echo "Password Should not be Empty";
        }
    }
    else{
        echo "Enter Your username";

    }
}


?>