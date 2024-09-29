

<?php

$conn=mysqli_connect("localhost","root","toor","SANDEEP");

$msg="";

 if($_SERVER['REQUEST_METHOD']=="POST"){

     
     if(isset($_POST['fullname']) && !empty($_POST['fullname'])){
         $fullname=$_POST['fullname'];
   

        if(isset($_POST['username']) && !empty($_POST['username'])){
                $username=$_POST['username'];

                if(isset($_POST['email']) && !empty($_POST['email'])){
                    $email=$_POST['email'];

                    if(isset($_POST['password']) && !empty($_POST['password'])){
                        $password=$_POST['password'];

                        // Verify User

                        $sql="SELECT `username`, `email` FROM `users` WHERE `username`='$username' OR `email`='$email'";


                        $qurry=mysqli_query($conn,$sql);
                          if($qurry){
                            if(mysqli_num_rows($qurry)>0){
                                $data=mysqli_fetch_assoc($qurry);
                                if($data['username']==$username){
                                    $msg = "username Already Taken";
                                }
                                else{
                                    $msg="Email Already Registerd";
                                }
                            }
                            else{
                                // insert Quarry
                              $sql="INSERT INTO `users` ( `fullname`,  `username`, `email`,`password`) VALUES ('$fullname','$username','$email','$password')";
                              $qurry=mysqli_query($conn,$sql);

                              if($qurry){
                                $msg = "Registration copmpeted";
                              }
                                     
                            
                             else{
                                $msg = "Can Not Register At This Time Server Is Busy";
                          }
                            }  
                           
                        }


                        }
                        else{
                            $mgg="Please Enter Password";
                        }
                    }
                    else{
                        $msg="Please Enter Email";
                    }
                }
                else{
                    $msg="Please Enter Username";
                }
            }
           else {
            $msg="Please Enter Fullname";
            }
            
        }
    
               
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup form</title>
    <style>
        /* .container{
            border:2px solid black;
            width:30%
            margin-left:20px;
            margin-left:20px;
        } */
    </style>
</head>
<body>
    <div class="container">
        <form action="" method="post">

            <h1>Registration Form</h1>
            <?php
            echo $msg;
            ?>
            <br><br>
                <label for="">Fullname :</label>
                <input type="text" name="fullname">
                <br><br>
                <label for="">Username :</label>
                <input type="text" name="username">
                <br><br>
                <label for="">Email :</label>
                <input type="email" name="email">
                <br><br>
                <label for="">Password :</label>
                <input type="password" name="password">
                <br><br>
                <button vlaue="signup">Signup</button>
        </form>
        

        <a href="./login.php">Login Here</a>
            </div>
</body>
</html>