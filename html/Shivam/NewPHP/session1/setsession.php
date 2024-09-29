<?php

session_start();

$_SESSION['name']="Rohit Mehra";
$_SESSION['age']=29;
$_SESSION['class']=12;

if(isset($_SESSION['name']) && isset($_SESSION['name']) && isset($_SESSION['name']) ){
    echo " Session has been satted";
}

?>