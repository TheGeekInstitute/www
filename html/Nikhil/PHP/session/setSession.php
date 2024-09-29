<?php
session_start();
$_SESSION['name']="Ritu 2.0";

if(isset($_SESSION['name'])){
    echo "Session has been Setted";
}



?>