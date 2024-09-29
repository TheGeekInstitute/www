<?php
define('MAIL',true);
session_start();
session_regenerate_id();
require('db.php');
if(isset($_POST['signup']) && isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['cpassword'])){
    if(!empty($_POST['name'])){
        $name=mysqli_real_escape_string($conn,input_filter($_POST['name']));

        if(!empty($_POST['email'])){
            $email=mysqli_real_escape_string($conn,input_filter($_POST['email']));
          if(filter_var($email,FILTER_VALIDATE_EMAIL)){
            if(!empty($_POST['password'])){
                $password=mysqli_real_escape_string($conn,input_filter($_POST['password']));
                if(!empty($_POST['cpassword'])){
                    $cpassword=mysqli_real_escape_string($conn,input_filter($_POST['cpassword']));
                    if($password=$cpassword){
                        $password=password_hash($password,PASSWORD_BCRYPT);
                        //signup process
                        $sql="SELECT `email` FROM `users` WHERE `email`=?;";
                        $signup_stmt=$conn->prepare($sql);
                        $signup_stmt->bind_param("s",$email);
                        $signup_stmt->execute();
                        $signup_stmt->store_result();
                        if($signup_stmt->num_rows==1){
                            $signup_stmt->close();
                            echo '
                            <script>
                                alert("Email Already Taken | Please Choose a New Email Address");
                            </script>
                            ';
                        }
                        else{

                            $sql="INSERT INTO `users`(`name`, `email`, `password`) VALUES (?,?,?);";
                            $insert_stmt=$conn->prepare($sql);
                            $insert_stmt->bind_param("sss",$name,$email,$password);
                            $insert_stmt->execute();
                            $insert_stmt->store_result();
                            if($insert_stmt->affected_rows==1){
                                echo '
                                <script>
                                    alert("Registration Completed |  Please Login");
                                </script>
                                ';
                            }
                            else{
                                echo '
                                <script>
                                    alert("Server Busy Can not Register at this time");
                                </script>
                                ';
                            } 




                        }
       
                            }
                            else{
                                echo '
                                <script>
                                    alert("password Not Matched !");
                                </script>
                                ';
                            }
 
        }//cpassword
        else{
            echo '
            <script>
                alert("password Should Not be Empty !");
            </script>
            ';
        }
    
    }//password
    else{
        echo '
        <script>
            alert("password Should Not be Empty !");
        </script>
        ';
    }
    }//valid email
    else{
        echo '
        <script>
            alert("Please Enter a Valid Email !");
        </script>
        ';
    }

    
    }//email
    else{
        echo '
        <script>
            alert("Email Should not be Empty !");
        </script>
        ';
    }
    
    
    }//name
    else{
        echo '
        <script>
            alert("Name Should not be Empty !");
        </script>
        ';
    }
}



?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>M3-Mail | Create-Account</title>
    <link rel="shortcut icon" href="images/email.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="script.js"></script>
    <link rel="stylesheet" href="main.css">
</head>

<body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>"> 
    <div class="m3-mail">

        <div class="container">
        <h1>Create account</h1>
  
            <input type="text" name="name">
            <label><span>Name</span></label>
            <input type="text" name="email">
            <label><span>Email</span></label>
            <input type="password" name="password">
            <label><span>Password</span></label>
            <input type="password" name="cpassword">
            <label><span>Confirm Password</span></label>
            <button type="submit" name="signup">GO</button>
            <p>Already have an account? <a href="login.php">Login</a></p>
            <pre>Powered By M3-Mail</pre>
        </div>
        
    </div>
</form>
</body>

</html>