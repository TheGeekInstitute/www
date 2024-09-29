<?php
if(!defined("FILE_INCLUDE")){
    header("location:../");
}

$host="localhost";
$user="root";
$pass="toor";
$db="ecommerce";

$connection = new mysqli($host,$user,$pass,$db);

?>