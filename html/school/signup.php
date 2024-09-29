<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Signup</title>
<style>

    *{
        margin: 0%;
        padding: 0%;
    }
    .nav{
        background-color: black;
        color: white;
        font-weight: 700;
        height: 30px;
        padding-top: 15px;
        padding-bottom: 15px;
    }

    .nav ul li {
        display: inline;
        /* float: both; */
        /* padding: 3px; */
    }

 .btn,.nav_items{
        /* float: right; */
        text-decoration: none;
        color: white;
        /* padding: 6px; */
    }
    .nav_items{
        margin-left: 6px;
        margin-right: 6px;
        /* border: 1px solid red; */
        /* background-color: #cccc; */
        padding: 6px;
    }
    .btn{
        float: right;
        /* clear:left;         */
        margin-left: 6px;
        margin-right: 6px;
        border: 1px solid red;
        background-color: #cccc;
        padding: 6px;
    }

    label{
        font-weight: 600;
        padding: 6px;
    }
    input[type="text"],input[type="password"],select{
        padding: 7px;
    }

</style>
</head>
<body>
<div class="nav">
    <ul>
        <li id="heading">Geek Institute</li>
        <li><a href="#"  class="nav_items">Home</a></li>
        <li><a href="#" class="nav_items">About</a></li>
        <li><a href="#" class="nav_items">Contact</a></li>
        <li><a href="#" class="btn" id="signup">Signup</a></li>
        <li><a href="#" class="btn" id="login">Login</a></li>

    </ul>
</div>

<br><br><br>
<form method="post">
    <table>
        <tr>
            <td><label>First Name :</label></td>
            <td><input type="text" name="first"></td>
        </tr>
 
    <tr>
    <td><label>Last Name : </label></td>
    <td><input type="text" name="last"></td>
     </tr>
 
    <tr>
    <td><label for="">Username :</label></td>
    <td><input type="text" name="username"></td>
    </tr>
  
    <tr>
    <td><label>Email :</label></td>
    <td><input type="text" name="email" id=""></td>
    </tr>

    <tr>
    <td><label for="">Password :</label></td>
    <td><input type="password" name="password"></td>
    </tr>

    <tr>
    <td><label for="">Signup Type :</label></td>
    <td><select name="type">
    <option value="">Choose</option>
        <option value="Teacher">Teacher</option>
        <option value="Student">Student</option>
    </select></td>
    </tr>
   
    <tr>
    <td><input type="submit" name="" Value="Signup"></td>
    </tr>
</table>
</form>

<!-- <script src="./app.js"></script> -->
</body>
</html>

<?php
session_start();
require("db.php");
require("functions.php");
$first=$last=$username=$email=$password=$type=$otp="";
$registration=false;
if($_SERVER['REQUEST_METHOD']=='POST'){
    if(!empty($_POST['first'])){
        if(ctype_alpha($_POST['first']) && strlen($_POST['first'])<=30){
            $first=$_POST['first'];
            if(!empty($_POST['last'])){
                if(ctype_alpha($_POST['last']) && strlen($_POST['last'])<=30){
                    $last=$_POST['last'];
                    if(!empty($_POST['username'])){
                        if(ctype_alnum($_POST['username']) || ctype_alpha($_POST['username'])){
                            $username=$_POST['username'];
                            if(!empty($_POST['email'])){
                                if(filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
                                    $email=$_POST['email'];
                                    if(!empty($_POST['password'])){
                                      $password=password_hash($_POST['password'],PASSWORD_BCRYPT);
                                        if(!empty($_POST['type']) && $_POST['type']=="Teacher" || $_POST['type']=="Student"){
                                            $type=$_POST['type'];
                                            $registration=true;
                                        }
                                        else{
                                            echo '
                                            <script>
                                                alert("Please Select Regstration Type");
                                            </script>
                                            ';
                                        }
                                      
                                    }
                                    else{
                                        echo '
                                        <script>
                                            alert("Password Should Not Be Empty");
                                        </script>
                                        '; 
                                    }
                                }
                                else{
                                    echo '
                                    <script>
                                        alert("Invalid Email");
                                    </script>
                                    '; 
                                }
                            }
                            else{
                                echo '
                                <script>
                                    alert("Email Should Not Be Empty");
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
                            alert("Username Should Not Be Empty");
                        </script>
                        '; 
                    }
                }
                else{
                    echo '
                    <script>
                        alert("Invalid Last Name");
                    </script>
                    '; 
                }
            }
            else{
                echo '
        <script>
            alert("Last Name Should Not Be Empty");
        </script>
        ';
            }
        }
        else{
            echo '
        <script>
            alert("Invalid First Name");
        </script>
        ';
        }
    }
    else{
        echo '
        <script>
            alert("First Name Should Not Be Empty");
        </script>
        ';
    }
}

//regstration process
if($registration==true){

$sql="SELECT * FROM `users` WHERE `username`='$username' OR `email`='$email'";
$query=mysqli_query($connection,$sql);
$num=mysqli_num_rows($query);
if($num==1){
    $data=mysqli_fetch_assoc($query);
    if($data['username']==$username){

        echo '
        <script>
            alert("Username Already Taken");
        </script>
        ';
    }
    else{
        echo '
        <script>
            alert("Email Already Registered");
        </script>
        ';
    }
}
else{
    $otp=mt_rand(100000,999999);
    $user_sql="INSERT INTO `users`(`firstname`, `lastname`, `username`, `email`, `password`, `type`, `is_verified`) VALUES ('$first','$last','$username','$email','$password','$type','0')";

    $otp_sql="INSERT INTO `otp`(`otp`, `send_time`, `email`, `username`) VALUES ('$otp',current_timestamp(),'$email','$username')";
    $user_query=mysqli_query($connection,$user_sql);
    $otp_query=mysqli_query($connection,$otp_sql);

    // var_dump($otp_query);
    if($user_query && $otp_query && sendmail($email,"OTP Verification",$otp,"verify")){
        $_SESSION['otp']=$otp;
        $_SESSION['first']=$first;
        $_SESSION['last']=$last;
        $_SESSION['username']=$username;
        $_SESSION['email']=$email;   
        $_SESSION['signup']=true;
        
        echo '
        <script>
        alert("Regstration Successful");
        window.location.href="verify.php";
        </script>
        ';
    }
    else{
        echo '
        <script>
            alert("Server Busy");
        </script>
        ';
    }
    
}
}


// var_dump(sendmail("mk606264@gmail.com","OTP",25465,"verification"))


?>