<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sing <up class=""></up></title>
</head>
<body>
    <form method="Post">
        Name : <input type="text" name="name" placeholder="Enter your First Name "><br><br>
        
        Email : <input type="email" name="email" placeholder="Enter Your Email"> <br><br>
        Password : <input type="password" name="psw" placeholder="Enter Your Password"><br><br>
        <input type="submit" value="Sing up">        

    </form>
    
</body>
</html>

<?php
if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['psw'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $psw=$_POST['psw'];
    $crd=$name.":".$email.":".$psw;
    $pointer=fopen('data.txt',"a");
    $result=fwrite($pointer,$crd."\n");
    fclose($pointer);
    if($result){
        echo "resistered succesfully";
    
    }
    else{
        echo "can not Register at line time";
    }



}

?>