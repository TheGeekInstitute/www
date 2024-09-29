<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rasistration</title>
</head>
<body>
    <h1>Rasistration Form</h1>
    <form action="" method="POST">
    Name : <input type="text" name="name">
    <br><br>
    User Name : <input type="text" name="username">
    <br><br>
    Email : <input type="text" name="email">
    <br><br>
    Password : <input type="password " name="password">
    <br><br>
    <input type="submit" value="Singup">
    <br><br>
</form>
<a href="./login.php">login</a>
</body>
</html>

<?php

if($_SERVER['REQUEST_METHOD']=="POST"){
    if(!empty($_POST['name'])){
        $name=$_POST['name'];
        if(!empty($_POST['username'])){
            if(ctype_alnum($_POST['username']) || ctype_alpha($_POST['username'])){
                $username=$_POST['username'];
                if(!empty($_POST['email'])){
                    if(filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
                        $email=$_POST['email'];
                        if(!empty($_POST['password'])){
                            $password=$_POST['password'];
                            $sql=" SELECT * FROM `users` WHERE `username`=`$username` OR `email`=`$email`";
                            $exucute=mysqli_query($conn,$sql);
                            if($exucute){
                                $data=mysqli_fetch_assoc($exucute);
                                $num=mysqli_num_rows($exucute);
                                if($num==1){
                                    if($data('username')==$username){
                                        echo '
                                        <script>
                                        alter("Already Exist Username")
                                        </script>
                                        ';
                                    }
                                    else{
                                        echo'
                                        <script>
                                        alter("Already Exist Email Address")
                                        </script>
                                        ';
                                    }
                                }
                                else{
                                    $sql="INSERT TABlE INTO `users`(`name`,`username`,`email`,`password`) VALUES ($name,$username,$email,$password) ";
                                    $query=mysqli_query($conn,$sq);
                                    if($query){
                                        echo '
                                        <script>
                                        alter("Register sucsesfully !")
                                        </script>';
                                    }
                                    else{
                                        echo '
                                        <script>
                                        alter("Server Busy !")
                                        </script>';
                                    }
                                }
                            }
                        }
                        else{
                            echo "Password should be Eetered";
                        }

                    }
                    else{'
                        <script>
                        alter("Email Already Exisest")
                        </script>
                        ';
                    }
                }
                else{
                    echo "Email Shoudl be Entered";
                }
            }
            else{'
                <script>
                alter("Username Akready Exiest")
                </script>
                ';
            }
            
        }
        else{
            echo "Username should be Entered";
        }
    }
    else{
        echo "Name shoud be Entered";
    }
}





?>