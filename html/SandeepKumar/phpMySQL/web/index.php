
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
                    $password=password_hash($_POST['password'],PASSWORD_BCRYPT);
                    
                    
                    //Verify User

                    $sql="SELECT `username`, `email` FROM `users` WHERE `username`='$username' OR `email`='$email'";

                    $query=mysqli_query($conn,$sql);
                    if($query){
                       if(mysqli_num_rows($query)>0){
                        $data=mysqli_fetch_assoc($query);
                        if($data['username']==$username){
                            $msg = "Username Already Taken";
                        }
                        else{
                            $msg="Email Already Registered";
                        }

                       }
                       else{
                        //Insert Query
                        $sql="INSERT INTO `users`(`fullname`, `username`, `email`, `password`) VALUES ('$fullname','$username','$email','$password')";
                        $query=mysqli_query($conn,$sql);
                        if($query){
                            $msg = "Registration Completed";
                        }
                        else{
                            $msg = "Can not Register At This Time Server Busy";
                        }



                       }
                    
                    
                    }else{
                        $msg="Server Busy";
                    }


    
                }
                else{
                    $msg="Please Enter Password";
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
    else{
        $msg="Please Enter Full Name";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <style>
  
    </style>
</head>
<body>

    <div class="container">
        <h1>Registration Form</h1>

        <?php echo $msg; ?>

        <br><br>
        <form action="" method="POST">
            <label for="">Full Name :</label>
            <input type="text" name="fullname">
            <br><br>
            <label for="">Username </label>
            <input type="text" name="username">
            <br><br>
            <label for="">Email </label>
            <input type="email" name="email">

            <br><br>
            <label for="">Password</label>
            <input type="password" name="password">
            <br><br>
            <input type="submit" value="Signup">
        </form>
        <a href="./login.php">Login Here</a>
    </div>

    

</body>
</html>