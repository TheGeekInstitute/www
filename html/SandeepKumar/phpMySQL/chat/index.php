<?php
$msg="";
$conn=mysqli_connect("localhost","root","toor","SANDEEP");

if($_SERVER['REQUEST_METHOD']=="POST"){
    if(isset($_POST['name']) && !empty($_POST['name'])){
        $name=$_POST['name'];

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
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap");

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: "Poppins", sans-serif;
    }

    .container {
      height: 100vh;
      width: 100%;
      align-items: center;
      display: flex;
      justify-content: center;
      background-color: white
    }

    .form {
      border-radius: 10px;
      box-shadow: 0 5px 10px 0 rgba(0, 0, 0, 0.3);
      width: 400px;
      height: 480px;
      background-color: rgba(255, 255, 255, 0.192);
      padding: 10px 30px;
    }

    .box {
      text-align: center;
      padding: 10px;
    }

    .box h1 {
      font-size: 26px;
      font-weight: bold;
    }

    .Register input {
      margin: 10px 0;
      width: 100%;
      background-color: rgba(128, 128, 128, 0.534);
      border: none;
      outline: none;
      padding: 12px 20px;
      border-radius: 4px;
    }

    .Register button {
      background-color: rgba(18, 121, 218, 0.959);
      color: white;
      font-size: 16px;
      outline: none;
      border-radius: 5px;
      border: none;
      padding: 8px 15px;
      width: 100%;
    }

    .Register {
      display: flex;
      align-items: center;
      padding: 10px;
    }

    .chekbox input[type="checkbox"] {
      background-color: white;
    }

    .chekbox span {
      margin: 5px;
      font-size: 13px;
    }

    .form a {
      color: #4796ff;
      text-decoration: none;
    }
  </style>
</head>

<body>
  <div class="container">

    <div class="form">
      <div class="box">
        <h1>Create Account</h1>
        <span>Already have an account? <a href="login.php">Login</a></span>
        <?php echo $msg; ?>
      </div>
      <div class="Register">
        <form  method="post">

          <input type="text" name="name" placeholder="Name">

          <input type="text" name="username" id="username" placeholder="UserName" />



          <input type="email" name="email" placeholder="Email" id="email" />

          <input type="password" name="password" placeholder="Password" id="password" />
          <button>Sign Up</button>

        </form>
      </div>

    </div>
  </div>
  </div>
</body>

</html>