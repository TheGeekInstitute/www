<?php
$msg="";

if($_SERVER['REQUEST_METHOD']=="POST"){


        

            if(isset($_POST['email']) && !empty($_POST['email'])){
                $email= trim($_POST['email']);

                if(isset($_POST['password']) && !empty($_POST['password'])){
                    $password= trim($_POST['password']);

               
                    $fptr=fopen("output.txt","r");
                    for($i=0 ; $i< count(file("output.txt")) ; $i++){
                        $output= explode(":", fgets($fptr));


                        if(trim($output[3])==$email && trim($output[4])==$password){
                            SESSION_start();
                            $_SESSION["firstname"]= $output[0];
                            $_SESSION['lastname']=$output[1];
                            header("location:main2.php");
                        }
                        else{
                            $msg='Incorrect Username/Password';
                        }

                    }



                    fclose($fptr);
            
                    
                }
        
                
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

    body{
        background-color:lightblue;
    }
    .box{
        border:2px solid black;
        padding:20px;
        text-align:center;
        width:300px;
        margin:200px auto;
        height: 430px;
        background-color:cyan;
        
        
        border-radius:10px;
    }
    .box label{
        font-family:cursive;
    }
    .box input{
        height: 20px;
        margin-top:30px;
        background-color:black;
        color:white;
        
        border-radius:5px;
    }
    .box fieldset{
        border-radius:10px;
        background-image:linear-gradient(30deg,red,blue,yellow,cyan);
        height: 300px;
    }
    .box a{
        margin-left:30px;
        border:1px solid black;
        padding:5px;
        height:10px;
        text-align:center;
        width:50px;
        font-size:13px;
        text-decoration:none;
        border-radius:5px;
        
        
        font-family:cursive;
        background-color:black;
        color:white;
    }

    /* input :last-child{
        /* margin-top:40px; */
        
     */
 </style>
</head>
<body>
    <div class="box">
        <h1>LOGIN</h1>
        <p><?php echo $msg; ?></p>
        <form action="" method="POST">
            <fieldset>

        

        

        

        <label>Email </label>

        <input type="email" name="email"><br>


        <label>Password </label>

        <input type="password" name="password"><br>

        <input type="submit" value="Log in">

        <a href="index2.php">Sign up</a>

        
            
    </fieldset>


       </form>
        
       

    </div>
</body>
</html>