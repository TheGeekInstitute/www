<?php
session_start();

$_SESSION['name']="ABCD";

if(isset($_SESSION['name'])){
    echo "Session has been setted";
}

?>