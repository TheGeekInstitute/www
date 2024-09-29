<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
</head>
<body>
    <form action="" method="post">
        Full Name <input type="text" name="fullname">
        <br><br>
        Email : <input type="email" name="email">
        <br><br>
        Username : <input type="text" name="username">
        <br><br>
        Password : <input type="password" name="password">
        <br><br>
        <input type="submit" value="Signup">
    </form>


    <br><br>

<?php
// require "db.php";
$conn=mysqli_connect("localhost",'root',"toor","Akash");

if($_SERVER['REQUEST_METHOD']=="POST"){
    if(isset($_POST['fullname'])){
        $fullname=$_POST['fullname'];
    
        if(isset($_POST['email'])){
            $email=$_POST['email'];

            if(isset($_POST['username'])){
                $username=$_POST['username'];

                if(isset($_POST['password'])){
                    $password=$_POST['password'];

                    $sql="SELECT `user_id`, `fullname`, `email`, `username`, `password` FROM `users` WHERE `username`='$username' OR `email`='$email'";
                    $query=mysqli_query($conn,$sql);
                    if($query){
                        if(mysqli_num_rows($query)==1){
                            $data=msyqli_fetch_assoc($query);
                            if($data['email']==$email){
                                echo 'Email Already Registered';
                            }
                            else{
                                echo "Username Already taken";
                            }
                        }
                        else{
                            //Insert
                          
                            $insert_sql="INSERT INTO `users`( `fullname`, `email`, `username`, `password`) VALUES ('$fullname','$email','$username','$password')";
                            $insert_query=mysqli_query($conn,$insert_sql);
                            if($insert_query){
                                 
                                    echo 'regstration Successfully';
                               
                                 
                            }
                            else{
                                echo "Server Busy, Try After Some time";

                            }
                        }
                    }
                    


                }
                else{
                    echo "Please Enter Email";
                }

            }
            else{
                echo "Please Enter Username";
            }

        }
        else{
            echo "Please Enter Email";
        }

    }
    else{
        echo "Please Enter Full Name";
    }
}



?>



</body>
</html>

