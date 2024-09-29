<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <form action="" method="POST">
            TO :
            <input type="text" name="email">
            <br><br>
        Subject :
        <input type="text" name="subject">

            <br><br>
            Body: 
            <textarea name="msg" id="" cols="30" rows="10"></textarea>

            <br><br>

            <input type="submit">
        </form>
<?php
require("mail.php");

if($_SERVER['REQUEST_METHOD']=="POST"){
    if(isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['subject']) && !empty($_POST['subject']) && isset($_POST['msg']) && !empty($_POST['msg'])){
       $email=$_POST['email'];
       $subject=$_POST['subject'];
       $msg=$_POST['msg'];


       if(sendmail($email,$subject,$msg)){
        echo "Mail Has Been Sended";
       }
       else{
        echo "Failed !!!!, Can not Send Mail At This Time Server Busy";
       }
    }
}



?>




</body>
</html>