<?php

if($_SERVER['REQUEST_METHOD']== "POST"){
    if(isset($_POST['email']) && !empty($_POST['email']))
     $email=trim($_POST['email']);
    
     if(isset($_POST['password']) && !empty($_POST['password'])){
         $password=trim($_POST['password']);

         $open=fopen("save.txt","r");
         for($i=0; $i< count(file("save.txt")) ; $i++){
            $save = explode(":",fgets($open));
            if(trim($save[4])==$email && trim($save[5])==$password){
                session_start();
                $_SESSION['firstname']=$save[0];
                $_SESSION['lastname']=$save[1];
                header("location:signup.php");
            }
            else{
                $msg='Incorrect Username/Password';
            }

        }
     fclose($open);
     }
     else{
        echo "Please Enter Password";
     }
}
else{
    echo 'Please Enter Email';
}
?>


<!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-image:url(https://img.freepik.com/free-vector/gradient-mountain-landscape_23-2149162009.jpg?size=626&ext=jpg&ga=GA1.1.1314780943.1711929600&semt=ais);
            /* background-repeat:no-repeat; */
            background-size:cover:
            height:100vw;
            background-color:black;
            width:100vw;
            background-blend-mode:overlay;
            background-color:rgba(0,0,0,.8);
            
            
           
            
        }
        form{
            margin:150px auto;
            border:2px solid none;
            width:380px;
            height: 360px;
            border-radius:0px 30px 0px 30px ;
            padding:40px;
             background-image:url(https://png.pngtree.com/thumb_back/fh260/background/20201101/pngtree-scene-with-geometrical-forms-the-poster-model-minimal-background-render-image_452981.jpg);
             background-repeat:no-repeat;
             background-size:cover;
             background-position:right;
             box-shadow:10px 10px 10px black;
        }
        label{
            font-family:cursive;
            margin-left:10px;
        }
        input{
            width:220px;
            padding:5px;
            border-radius:5px;
            margin-top:30px;
            font-family:cursive;
            box-shadow:8px 8px 8px black;
            margin-left:20px;

        }
        a:hover{
            background-color:orange;
        }
        #submit:hover{
            background-color:green;
            transform:scale(1.1);
        }
        #submit{
            background-color:gray;
            margin:10px 0px 0px 60px;
            cursor: pointer;
            margin-top:30px;
        }
        a{
            border:1px solid white;
            padding:8px;
            margin-left:315px;
            width:200px;
            text-decoration:none;
            color:black;
            transition:all 0.3s linear;
            box-shadow:8px 8px 8px black;

            background-color:gray;
            border-radius:8px;

        }h1{
            text-align:center;
            font-family:cursive;
            text-decoration:underline;
        }
    </style>
 </head>
 <body>
    <form action="" method="POST">
        <?php
        $msg="";
        ?>
        <h1>Login</h1>
        <label>email :</label>
        <input type="email" name="email" placeholder="Enter Email.."><br><br>


        <label>Password :</label>
        <input type="password" name="password" placeholder="Enter Password..">
       <BR><BR>

       <input type="Submit" id="submit">
        <a href="index.php">Signup</a>
    </form>
            
         
       
       
 </body>
 </html>