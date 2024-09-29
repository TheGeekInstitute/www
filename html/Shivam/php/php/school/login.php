
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School Login Page</title>
    
<style> 
  
</style>
</head>
<body>
    <div>
    <h1>Login School Page</h1>
    <form action="" method="POST">
        <table>
            
                <tr>
                    <td> <label>Email:</label></td>
                    <td><input type="text" name="email"></td>
                </tr>
        
            <tr>
                <td> <label>Password:</label></td>
                <td><input type="password" name="password"></td>
            </tr>
            <tr>
                <td><input type="submit" value="Login"></td>
            </tr>
        </table>
    </form>
    </div>
</body>
</html>
<?php
// require("database.php");

require("functions.php");
session_start();
$conn=mysqli_connect("localhost","root","toor","school");
if($_SERVER['REQUEST_METHOD']=="POST"){
    if(!empty($_POST['email'])){
        if(filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
            $email=$_POST['email'];
            if(!empty($_POST['password'])){
                $password=$_POST['password'];
                $sql="SELECT * FROM `users` WHERE `email`='$email' OR `username`='$email'";
                $query=mysqli_query($conn,$sql);
                $num=mysqli_num_rows($query);
                if($num==1){
                    $data=mysqli_fetch_assoc($query);
                    if($data['is_verified']==1){
                        $_SESSION['firstname']=$data['firstname'];
                            $_SESSION['lastname']=$data['lastname'];                        
                            $_SESSION['user_id']=$data['user_id'];
                           echo $_SESSION['login']=true;
                            header("location:main.php");
                    }
                    else{'
                        <script>
                    alert("");
                    </script>';
                    }
                }
                else{
                    echo'
                    <script>
                    alert("User does not Exist");
                    </script>';
                }

                
            }
            else{
                echo'
            <script>
            alert("Enter your Password");
            </script>';
            }

        }
        else{
            echo'
            <script>
            alert("Invalid Email Adderess");
            </script>';
        }

    }
    else{
        echo'
        <script>
        alert("Email Sholud Name Eneterd");
        </script>';
    }
}
?>