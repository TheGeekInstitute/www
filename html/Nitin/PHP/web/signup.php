<?php
$error=false;
$msg="";
$color="";

if($_SERVER['REQUEST_METHOD']=="POST"){
    if(isset($_POST['fullname']) && !empty($_POST['fullname'])){
        $fullname=$_POST['fullname'];

        if(isset($_POST['username']) && !empty($_POST['username'])){
            $username=$_POST['username'];

            if(isset($_POST['email']) && !empty($_POST['email'])){
                $email=$_POST['email'];

                if(isset($_POST['password']) && !empty($_POST['password'])){
                    $password=$_POST['password'];

                    $cred = $fullname . ":" . $username . ":" . $email . ":". $password;

                    $fptr=fopen("data.txt","a");
                    fwrite($fptr,$cred."\n");
                    fclose($fptr);

                    $error=true;
                    $color="green";
                    $msg="Registration Completed";

                }
                else{
                    $error=true;
                    $color="red";
                    $msg="Please Enter FullName";
                }
            }
            else{
                $error=true;
                $color="red";
                $msg="Please Enter Email";
            }
        }
        else{
            $error=true;
            $color="red";
            $msg="Please Enter username";
        }
    }
    else{
        $error=true;
        $color="red";
        $msg="Please Enter FullName";
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
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .container{
            border: 2px solid black;
            width:20rem;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            margin: 150px auto;
            padding: 5px;
            border-radius: 10px;
        }

        .container p{
            font-size:  x-large;
            margin: 7px 0;
          
        }

        .container h1{
            margin:10px 0;
        }

        .container form{
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }



        .container form input{
            border: none;
            border: 1px solid black;
            border-width: 1px 1px 3px 1px;
            padding: 3px;
            font-size: large;
            width: 15rem;
            margin: 5px 0;
            outline: none;
        }

        .container form label{
            display: block;
            width: 15rem;
            font-size: large;
            /* margin: 5px 0; */
            font-weight: 900;
        }

        .container form input[type="submit"]{
            width: 10rem;
            background-color: royalblue;
            color: white;
            cursor: pointer;
            padding: 7px 0;
            border-radius: 3px;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Regstration Form</h1>
        <?php
        if($error){
            echo '
            <p style="color:'.$color.';">'.$msg.'</p>
            ';
        }
        ?>
        <form action="" method="POST">
            <label for="">Full Name</label>
            <input type="text" name="fullname">
            <label for="">Username</label>
            <input type="text" name="username">
            <label for="">Email</label>
            <input type="email" name="email">
            <label for="">Password</label>
            <input type="password" name="password">
            <input type="submit" value="Signup">
            <a href="./login.php">Login</a>
        </form>
    </div>

</body>
</html>