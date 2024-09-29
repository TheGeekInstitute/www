<?php
$msg="";
session_start();
$conn=mysqli_connect("localhost","root","toor","SANDEEP");

if($_SERVER['REQUEST_METHOD']=="POST"){
    
  if(isset($_POST['username']) && !empty($_POST['username'])){
    $username=$_POST['username'];

    if(isset($_POST['password']) && !empty($_POST['password'])){
      $password=$_POST['password'];

      $sql="SELECT `user_id`, `fullname`, `username`, `email`, `password` FROM `users` WHERE `username`='$username' OR `email`='$username'";

      $query=mysqli_query($conn,$sql);
      if($query){

        if(mysqli_num_rows($query)==1){

          $data =mysqli_fetch_assoc($query);

          if(password_verify($password,$data['password'])){
            $_SESSION['username']=$data['username'];
            $_SESSION['fullname']=$data['fullname'];
            $_SESSION['email']=$data['email'];
            header("location:chat.php");
            die();

          }
          else{
            $msg="Incorrect password";
          }


        }
        else{
          $msg="User Not Found";
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
    $msg="Please Enter Username";
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
        <h1>Login</h1>
        <span>Create  an account? <a href="index.php">signup</a> <br></span>
        <?php echo $msg; ?>
      </div>
      <div class="Register">
        <form  method="post">

          

          <input type="text" name="username" id="username" placeholder="UserName" />

          <input type="password" name="password" placeholder="Password" id="password" />
          <button type="submit">Sign In</button>

        </form>
      </div>

    </div>
  </div>
  </div>
</body>

</html>