<?php
$conn=mysqli_connect("localhost","root","toor","shivam");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Signup page....</h1>
   <form action="" method="POST">
    Full Name : <input type="text" name="name"><br><br>
    Username : <input type="text" name="username"><br><br>
    Email : <input type="text"  name="email"> <br><br>
    Password : <input type="password" name="password"><br><br>
              <input type="submit"><br><br>
   </form>
    
</body>
</html>

<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    if(!empty($_POST['name'])){
        $name=$_POST['name'];
        if(!empty($_POST['username'])){
            if(ctype_alnum($_POST['username']) || ctype_alpha($_POST['username'])){
                $username=$_POST['username'];
                if(!empty($_POST['email'])){
                    if(filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
                        $email=$_POST['email'];
                        if(!empty($_POST['password'])){
                            $password=password_hash($_POST['password'],PASSWORD_BCRYPT);
                            $sql="INSERT INTO `users`( `name`, `username`, `email`, `password`) VALUES (?,?,?,?)";
                            // if(isset($_POST['add'])){
                            
                               echo $name ."<br>";
                               echo $username."<br>";
                               echo $email."<br>";
                               echo $password."<br>";

                                $insert_stmt=mysqli_prepare($conn,$sql);
                                mysqli_stmt_bind_param($insert_stmt,"ssss",$name,$username,$email,$password);
                                mysqli_stmt_execute($insert_stmt);
                                mysqli_stmt_store_result($insert_stmt);
                                if(mysqli_stmt_affected_rows($insert_stmt)==1){
                                    
                                    echo'
                                    <script>
                                    alert("User Added");
                                    window.location.href="signup.php";
                                    </script>';
                                }
                                else{
                                    echo'
                                    <script>
                                    alert("User can not Be Added");
                                    </script>';
                                }
                            
                                mysqli_stmt_close($insert_stmt);
                            // }
                        }
                        else{
                            echo'
                            <script>
                            alert("Password should Not Be Empty");
                            </script>';
                        }

                    }
                    else{
                        echo'
                        <script>
                        alert("Invalid Email");
                        </script>';
                    }
                }
                else{
                    echo'
                    <script>
                    alert("Email should Not Be Empty");
                    </script>';
                }
            }
            else{
                echo'
                <script>
                alert("Invalid Username");
                </script>';
            }
        }
        else{
            echo'
            <script>
            alert("Username should Not Be Empty");
            </script>';
        }
    }
    else{
        echo'
        <script>
        alert("Name should Not Be Empty");
        </script>';
    }
}
mysqli_close($conn);
?>
