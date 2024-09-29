<?php
session_start();
$_SESSION['cookie']="Ram2.0";

if(isset($_SESSION['cookie'])){
    echo "The Session has been Setted";
}


?>