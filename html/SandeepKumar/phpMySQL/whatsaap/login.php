

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
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <style>
        
        .container{
            border: 2px solid black;
            margin:auto 380px;
            border-radius: 10px;
            height:400px;
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
       <h1> Login form</h1>
         <h3>Create Account</h3>
         <span>Already have an account? <a href="signup.php">Signup</a></span>
         <br>
         <?php echo $msg; ?>

          <br> 
          <label for="" class="A">Username</label>
          <br>
          <input type="text" placeholder="Username" class="B"  name="username">
         
         <br><br>

         <label for=""  class="A">Password :</label>
         <br>

         <input type="text" class="B" name="password"  placeholder="Password">
         <br><br>

         <button class="button">Signup</button></form>
        
    </div>
</body>
</html>