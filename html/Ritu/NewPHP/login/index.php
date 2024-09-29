<?php
session_start();
session_regenerate_id();
$conn =mysqli_connect("localhost","root","toor","ritu");



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sign_up</title>
</head>
<body>
<form method="post" enctype=multipart/form-data>
        <h1>Sign Up..</h1>
        Full name: <input type="text" name="fullname">
        <br><br>
        User name: <input type="text" name="username">
        <br><br>
        Email ID: <input type="email" name="email">
        <br><br>
        Password: <input type="password" name="pass">
        <br><br>
        <input type="submit" value="SIGNUP">
        <br><br>
        <a href="./login.php">Login</a>
       
</form>


<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
    if(isset($_POST['fullname']) && isset($_POST['username']) && isset($_POST['email']) && isset($_POST['pass'])){
        if(!empty($_POST['fullname'])){
            $fullname=$_POST['fullname'];
            if(!empty($_POST['username'])){
                $username=$_POST['username'];
                if(!empty($_POST['email'])){
                    $email=$_POST['email'];
                    if(!empty($_POST['pass'])){
                        $pass=$_POST['pass'];
                    
                        $sql="SELECT * FROM `user` WHERE `username`='$username' OR `email`='$email';";
                        $query=mysqli_query($conn,$sql);
                        if($query){

                            if(mysqli_num_rows($query)>0){
                                $data=mysqli_fetch_assoc($query);
                                
                                if($data['username']==$username){
                                 echo "Username Already registered";
                                 }
                                 else{
                                    echo "Email Already registered";
                                
                                     }

                            }
                            else{
                                $sql="INSERT INTO `user`(`fullname`, `username`, `email`, `password`) VALUES ('$fullname','$username','$email','$pass')";

                                $query=mysqli_query($conn,$sql);
                                if($query){
                                    echo "Successfully Registered Please Login";
                                }
                            }
                        }






                        
                }
                else{
                    echo "Please Enter Your Password";
                }
            }
            else{
               
    
                echo "Please Enter Your Email";
            }
                
            }
            else{
               echo "Please Enter User Name";
            }
    
        }
        else{
                    
    
            echo "Please Enter Your Full Name";
        }
     }
    
}


?>

</body>
</html>