<?php



session_start();
session_regenerate_id();





if(isset($_SESSION['login']) && isset($_SESSION['fullname'])){
    unset($_SESSION['login']);
    unset($_SESSION['fullname']);
    session_destroy();
    header("location:login.php");
}
else{
    // header("location:login.php");
}

?>