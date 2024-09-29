<?php
if(!defined('MAIL')){
header("location:index.php");
}

$conn=mysqli_connect('localhost','root','toor','new');

function input_filter($data){
    $data=stripcslashes($data);
    $data=trim($data);
    $data=htmlspecialchars($data);
    return $data;
 }
 
?>