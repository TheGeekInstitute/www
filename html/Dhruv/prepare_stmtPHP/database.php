<?php

if(!defined("Dhruv")){
    header("location:index.php");
}



$host="localhost";
$username='root';
$password="toor";
$database="Akash";

$connection=new mysqli($host,$username,$password,$database);

function input_filter($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
?>




