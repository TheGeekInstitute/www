<?php
session_start();
$connection=mysqli_connect("localhost","root","toor","school");
$_SESSION['login']=false;
if($_SERVER['REQUEST_METHOD']=='POST'){
    if(!empty($_POST['username'])){
        $username=$_POST['username'];
        if(!empty($_POST['password'])){
            $password=$_POST['password']; 
            $sql="SELECT * FROM `users` WHERE `username`='$username' OR `email`='$username'";
            $query=mysqli_query($connection,$sql);
            $num=mysqli_num_rows($query);
            if($num==1){
                $data=mysqli_fetch_assoc($query);
                if(password_verify($password,$data['password'])){
                    if($data['is_verified']==1){
                            $_SESSION['firstname']=$data['firstname'];
                            $_SESSION['lastname']=$data['lastname'];                        
                            $_SESSION['user_id']=$data['user_id'];
                            $_SESSION['login']=true;
                            header("location:main.php");                        
                            

                    }
                    else{
                        echo '
                        <script>
                            alert("Account Not Verified");
                        </script>
                        '; 
                    }
                }
                else{
                    echo '
                    <script>
                        alert("Incorrect Password");
                    </script>
                    '; 
                }
            }
            else{
                echo '
                <script>
                    alert("Invalid Username");
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
            alert("Username Should Not Be Empty");
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
    <title>login</title>
</head>
<body>

<form action="" method="POST">
<table>
<tr>
    <td>
        <label for="">Username/Email :</label>
    </td>
    <td><input type="text" name="username"></td>
</tr>
<tr>
    <td>
        <label for="">Password :</label>
    </td>
    <td><input type="password" name="password"></td>
</tr>
<tr>
    <td><input type="submit" value="Login" ></td>
</tr>

</table>
</form> 
</body>
</html>