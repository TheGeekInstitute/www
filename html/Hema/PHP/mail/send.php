<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <label for="">To</label>
        <input type="email" name="email">

        <br><br>

        <label for="">Subject</label>
        <input type="text" name="subject">

        <br><br>

        <textarea name="msg" id="" cols="30" rows="10"></textarea>

        <br><br>
        <input type="submit">
    </form>


    <?php

require 'mail.php';

    if($_SERVER['REQUEST_METHOD']=="POST"){
        if(isset($_POST['email']) && isset($_POST['subject']) && isset($_POST['msg'])){
            $to=$_POST['email'];
            $sub=$_POST['subject'];
            $msg=$_POST['msg'];

            if(sendmail($to,$sub,$msg)){
                echo "Email has Been Sended";
            }
            else{
                echo "Can not send email";
            }

        }
        else{
            echo 'Plsease Fill All The fields';
        }
    }

    ?>



</body>
</html>