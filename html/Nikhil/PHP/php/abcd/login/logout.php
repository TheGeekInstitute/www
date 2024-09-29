<?php
session_start();
if(isset($_SESSION['login']) && isset($_SESSION['name'])){
    unset($_SESSION['login']);
    unset($_SESSION['name']);
    session_destroy();
header("location:login.php");

}
else{
header("location:index.php");
}

?>