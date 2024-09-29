<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>singn up</title>
</head>
<body>
    <h1>Registration form</h1>
    <form action="./index1.php" method="post">
Name : <input type="text" name="name"> <br><br>
Username : <input type="text" name="username" id=""> <br><br>
Email : <input type="text" name="email" id=""> <br><br>
Password : <input type="text" name="password" id=""><br><br>
<input type="submit" value="signup">    
</form>
</body>
</html>
<?php
$conn=mysqli_connect("localhost","root","toor","web");
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
                        $sql="SELECT * FROM `user 12` WHERE `username`='$username' OR `email` = '$email'";
                        $ads=mysqli_query($conn,$sql);
                        if($ads){
                            $data=mysqli_fetch_assoc($ads);
                            $num=mysqli_num_rows($ads);
                            if($num==1){
                                if($data['username']==$username){
                                    echo'
                                    <script>
                                        alert("emai already exist");
                                    </script>';
                                }
                                else{
                                    echo'
                                    <script>
                                        alert("emai already exist");
                                    </script>';
                                }
                            }
                            else{
                                $sql="INSERT INTO `user 12`(`name`, `username`, `email`, `password`) VALUES ('$name','$username','$email','$password')";
                                $query=mysqli_query($conn,$sql);
                                if($query){
                                    echo '
                                    <script>
                                        alert("Registered Successfully !");
                                    </script>
                                    ';
                                }
                        }
                      }
                    }
                }
            }
           
        }
       
    }
}
}
mysqli_close($conn);

?>