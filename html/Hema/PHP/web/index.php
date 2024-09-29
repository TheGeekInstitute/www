<?php
$msg="";
if($_SERVER['REQUEST_METHOD']=="POST"){
    if(isset($_POST['fullname']) && !empty($_POST['fullname'])){
        $fullname=$_POST['fullname'];

        if(isset($_POST['username']) && !empty($_POST['username'])){
            $username=$_POST['username'];

            if(isset($_POST['password']) && !empty($_POST['password'])){
                $password=$_POST['password'];   

                $cred=$fullname.":".$username.":".$password;
                $fptr=fopen("cred.txt","a");
                fwrite($fptr,$cred."\n");
                fclose($fptr);

                $msg= "Regstration Successfully!!!!..";
            }
            else{
                $msg="Please Enter Password";
            }

        }
        else{
            $msg="Please Enter Username";
        }
    }
    else{
        $msg="Please Enter Full name";
    }
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
</head>
<body>
    <h1>Signup</h1>
    <form action="" method="POST">
        Full Name : <input type="text" name="fullname">
        <br><br>
        Username : <input type="text" name="username">
        <br><br>
        Password : <input type="password" name="password">
        <br><br>
        <input type="submit" value="Signup">
    </form>
    <br>
    <?php echo $msg; ?>


    <br><br>
    <a href="./login.php">Login Here</a>
</body>
</html>