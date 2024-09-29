<?php

if(!defined('FILE_INCLUDE')){
   header("location:../index.php");
 }

try {
$host="localhost";
$user="root";
$pass="toor";
$db="OwnOnlineShop";

$connection = new mysqli($host,$user,$pass,$db);

} catch (Exception $e) {
   echo $e->getMessage();
}

?>