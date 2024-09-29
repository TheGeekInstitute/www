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
    <title>Signup</title>
</head>
<body>
    
    <form action="" method="post">
        Full Name : <input type="text" name="fullname">
        <br><br>
        Username : <input type="text" name="username">
        <br><br>
        Email : <input type="text" name="email">
        <br><br>
        Password : <input type="password" name="password">
        <br><br>
        <input type="submit" value="Signup">
    </form>
</body>
</html>

<?php
$conn=mysqli_connect("localhost","root","toor","ritu");
if($_SERVER['REQUEST_METHOD']=="POST"){
   if(isset($_POST['fullname']) && !empty($_POST['fullname'])){
    $fullname=$_POST['fullname'];

    if(isset($_POST['username']) && !empty($_POST['username'])){
        if(ctype_alnum($_POST['username'])){
            $username=$_POST['username'];

            if(isset($_POST['email']) && !empty($_POST['email'])){
                if(filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
                    $email=$_POST['email'];

                    if(isset($_POST['password']) && !empty($_POST['password'])){
                        if(strlen($_POST['password'])>=8 && strlen($_POST['password'])<=32){
                            $password=password_hash($_POST['password'],PASSWORD_BCRYPT);

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
                                    $sql="INSERT INTO `user`(`fullname`, `username`, `email`, `password`) VALUES ('$fullname','$username','$email','$password')";
    
                                    $query=mysqli_query($conn,$sql);
                                    if($query){
                                        echo "Successfully Registered Please Login";
                                    }
                                }
                            }
                           
                        }
                        else{
                            echo "password Should be min 8 and max 32 Characters";
                        }

                    }
                    else{
                        echo "Password Should Not Be Empty";
                    }

                }
                else{
                    echo "Invalid Email";
                }
               }
               else{
                echo "email Should Not Be Empty";
               }
            
        }
        else{
            echo "Invalid username";
        }
       }
       else{
        echo "UserName Should Not Be Empty";
       }
    

   }
   else{
    echo "Full Name Should Not Be Empty";
   }

}
?>