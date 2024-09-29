<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
      
        label{
            padding: 6px;
        }
        input[type="text"],input[type="password"],select{
            padding: 7px;
        }
    </style>
</head>
<body>

    <form action="" method="post">
<table>
<tr>
    <td>
        <label>First Name :</label> </td>
    <td>
        <input type="text" name="first" id="">
    </td>
</tr>
<tr>
    <td>
        <label>Last Name :</label> </td>
    <td>
        <input type="text" name="last" id="">
    </td>
</tr>
<tr>
    <td>
        <label>Username :</label> </td>
    <td>
        <input type="text" name="username" id="">
    </td>
</tr>
<tr>
    <td>
    
          <label>Email :</label> </td>
          <td>   <input type="text" name="email" id="">
    </td>
</tr>
<tr>
    <td>
        <label>Password :</label> </td>
    <td>
        <input type="password" name="password" id="">
    </td>
</tr>
<tr>
    <td>
        <label>Signup Type :</label></td>
        <td>
            <select name="type">
                <option value="">Choose</option>
                <option value="Teacher">Teacher</option>
                <option value="Student">Student</option>
            </select></td>
</tr>
<tr>
    <td>
        <input type="submit" name="" value="Signup">
    </td>
</tr>
</table>
</form>
    
</body>
</html>
<?php
session_start();
$connection=mysqli_connect("localhost","root","toor","shukla");
require("mail.php");
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
                        if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
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

if($registration==true){
      $sql="SELECT * FROM `register` WHERE `username`='$username' OR `email`='$email'";
      $query=mysqli_query($connection,$sql);
      $num=mysqli_num_rows($query);
      if($num==1){
        $data=mysqli_fetch_assoc($query);
        if($data['username']==$username){

            echo '<script>
            alert ("Username Already taken");
            </script>';
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
$user_sql="INSERT INTO `register`(`firstname`, `lastname`, `username`, `email`, `password`, `type`, `is_verified`) VALUES ('$first','$last','$username','$email','$password','$type',0)";

        $otp_sql="INSERT INTO `otp` (`otp`, `time`, `username`, `email`) VALUES ('$otp',current_timestamp(),'$username','$email')";
        $user_query=mysqli_query($connection,$user_sql);

        
        $otp_query=mysqli_query($connection,$otp_sql);
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
        </script>';

        }
        else{
            echo '
            <script>
                alert("Server1 Busy");
            </script>
            ';
        }

      }

}

?>
