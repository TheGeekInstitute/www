<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
</head>
<body>
    <h1>Regstration Form</h1>
    <form action="./index.php" method="post">
        Name : <input type="text" name="name" id="">
        <br><br>
        Username : <input type="text" name="username" id="">
        <br><br>
        Email : <input type="text" name="email" id="">
        <br><br>
        Password : <input type="password" name="password">
        <br><br>
        <input type="submit" value="Signup">
    </form>
<br><br>
    <a href="./login.php">Login</a>
</body>
</html>
<?php
$conn = mysqli_connect("localhost","root","toor","web");
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
                            $sql="SELECT * FROM `users` WHERE `username`='$username' OR `email`='$email'";
                            $execute=mysqli_query($conn,$sql);
                            if($execute){
                                $data=mysqli_fetch_assoc($execute);
                                $num=mysqli_num_rows($execute);
                                if($num==1){
                                    if($data['username']==$username){
                                        echo '
                                        <script>
                                            alert("Username Already Exist");
                                        </script>
                                        ';
                                    } 
                                    else{
                                        echo '
                                        <script>
                                            alert("Email Already Exist");
                                        </script>
                                        ';
                                    }
                                }
                                else{
                            $sql="INSERT INTO `users`(`name`, `username`, `email`, `password`) VALUES ('$name','$username','$email','$password')";
                            $query=mysqli_query($conn,$sql);
                            if($query){
                                echo '
                                <script>
                                    alert("Registered Successfully !");
                                </script>
                                ';
                            }
                            else{
                                echo '
                                <script>
                                    alert("Server Busy !");
                                </script>
                                ';
                            }
                                }
                            }
                            else{
                                echo '
                                <script>
                                    alert("Server Busy !");
                                </script>
                                ';
                            }
                        }
                        else{
                            echo '
                            <script>
                                alert("password Should Not be empty");
                            </script>
                            ';
                        }
                    }
                    else{
                        echo '
                        <script>
                            alert("Invalid Email Address");
                        </script>
                        ';
                    }
                }
                else{
                    echo '
                    <script>
                        alert("Email Should Not be empty");
                    </script>
                    ';
                }
            }   
            else{
                echo '
                <script>
                    alert("Invalid username");
                </script>
                ';
            } 
        }
        else{
            echo '
            <script>
                alert("Username Should Not be empty");
            </script>
            ';
        }
    }
    else{
        echo '
        <script>
            alert("Name Should Not be empty");
        </script>
        ';
    }
}
?>
