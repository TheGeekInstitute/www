<?php
session_start();
if(isset($_SESSION['username'])){
session_destroy();
// header("location:5.php");
}
else{
    // header("location:5.php");
}




?>