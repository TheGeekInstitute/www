<?php
session_start();
if(isset($_SESSION['fullname'])){
    echo "Hello, " . $_SESSION['fullname'];
}
else{
    header("location:login.php");
}


if(isset($_GET['logout'])){
    session_destroy();
    header("location:login.php");

}

?>


<a href="?logout=1">Logout</a>