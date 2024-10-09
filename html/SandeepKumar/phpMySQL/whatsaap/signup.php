
<?php
$msg="";
$conn=mysqli_connect("localhost","root","toor","SANDEEP");

if($_SERVER['REQUEST_METHOD']=="POST"){
    if(isset($_POST['fullname']) && !empty($_POST['fullname'])){
        $name=$_POST['fullname'];

        if(isset($_POST['username']) && !empty($_POST['username'])){
            $username=$_POST['username'];

            if(isset($_POST['email']) && !empty($_POST['email'])){
                $email=$_POST['email'];

                if(isset($_POST['password']) && !empty($_POST['password'])){
                    $password=password_hash($_POST['password'],PASSWORD_BCRYPT);

                    $sql="SELECT `username`, `email`, `password` FROM `users` WHERE `username`='$username' OR `email`='$email'";
                    
                    $query=mysqli_query($conn,$sql);
                    if($query){
                        if(mysqli_num_rows($query)>0){
                            $data=mysqli_fetch_assoc($query);
                            if($data['username']==$username){
                                $msg="Username Already Taken";
                            }
                            else{
                                $msg="Email Already Registered";
                            }
                        }
                        else{
                            //Insert;
                            $sql="INSERT INTO `users`(`fullname`, `username`, `email`, `password`) VALUES ('$name','$username','$email','$password')";
                            $query=mysqli_query($conn,$sql);
                            if($query){
                                $msg="Registration Successfully";
                            }
                            else{
                                $msg="Can Not register At This Time <br> Server Busy";
                            }

                        }
                        

                    }
                    else{
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
        $msg="Please Enter Name";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <style>
        
        .container{
            border: 2px solid black;
            margin: auto 350px;
            border-radius: 10px;
            height: 600px;
            width:350px;
            text-align: center;
            background:rgba(0, 128, 0, 0.51);
        }
    .container .A{
      
        font-size: 25px;

      }

      .container .B{
        padding:10px;
        border-radius: 15px;
      }
      .button{
        padding:10px;
        background-color:red;
        border-radius:5px;
      }
        
    
    </style>
</head>
<body>
    <div class="container">
     <form method="POST">
    <h1> Signup  form</h1>
         <h3>Create Account</h3>
         <span>Already have an account? <a href="login.php">Login</a></span>
         <br>
         <?php echo $msg; ?>
          <br><br><br>
         <label  for="" class="A">Name :</label>
         <br>
         <input type="text" class="B" name="fullname" placeholder="Name">
         <br><br>
         <label for="" class="A" >Username :</label>
         <br>
         <input type="text" class="B" name="username" placeholder="UserName">
         <br><br>
         <label for="" class="A">Email :</label>
         <br>
         <input type="text" class="B" name="email" placeholder="email">
         <br><br>
         <label for=""  class="A">Password :</label>
         <br>
         <input type="text" class="B" name="password" placeholder="Password">
         <br><br>

         <button class="button">Signup</button>
    </form>
         
    </div>
</body>
</html>