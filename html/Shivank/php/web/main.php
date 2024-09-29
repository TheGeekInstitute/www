<?php
session_start();
if(isset($_SESSION['name'])){
    echo "hi," . $_SESSION['name'];
}
else{
    header("location:login.php");
}

?>