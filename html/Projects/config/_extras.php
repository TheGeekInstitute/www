<?php
if(!defined('FILE_INCLUDE')){
    header("location:../index.php");
}

if(isset($_COOKIE['user_auth']) && !empty($_COOKIE['user_auth'])){
    header("location:index.php");
}

?>