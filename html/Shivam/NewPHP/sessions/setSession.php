<?php
// session_name("ABCD");
session_start();

$name="Shivam";

$_SESSION['name']=$name;
$_SESSION['age']=25;

if(isset($_SESSION['name'])){
    echo "Session has been Setted";
}


?>