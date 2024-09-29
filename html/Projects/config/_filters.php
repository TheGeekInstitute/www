<?php
if(!defined("FILE_INCLUDE")){
    header("location:../index.php");
}
function input_filter($input){
    $input=trim($input);
    $input=stripcslashes($input);
    $input=htmlspecialchars($input);
    $input=filter_var($input, FILTER_SANITIZE_STRING);
    return $input;
  }

?>