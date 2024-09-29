<?php
session_start();


echo "<pre>";


var_dump($_SESSION);
if(isset($_SESSION['name'])){
    echo "Hi, " . $_SESSION['name'] . $_SESSION['age'];
}


?>