<?php
session_start();

if(isset($_SESSION['name'])){
    unset($_SESSION['name']);
    session_destroy();

    echo "Session has been Deleted";
}
else{
    echo "No Session Found";
}



?>