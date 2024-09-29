<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="email">
        <textarea name="msg" id="" cols="30" rows="10"></textarea>
        <input type="submit">
    </form>

    <br><br><br>


    <?php
    
require "mail.php";
// function sendmail($email,$subject,$msg){
// $header = "From:no-reply@dhruvtesting.rf.gd \r\n";
// $header .= "MIME-Version: 1.0\r\n";
// $header .= "Content-type: text/html\r\n";

// $send = mail ($email,$subject,$msg,$header);
// if( $send == true ) {
//    return true;
// }else {
//    return false;
// }
// }
    
    if($_SERVER['REQUEST_METHOD']=="POST"){
        $email=$_POST['email'];
        $msg=$_POST['msg'];

        if(sendmail($email,"Form Data",$msg)){
            echo "Mail Has Been Sended";
        }
        else{
            echo "Failed";
        }

    }

    ?>
</body>
</html>