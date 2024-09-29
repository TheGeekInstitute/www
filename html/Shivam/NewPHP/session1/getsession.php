<?php
echo "<pre>";
session_start();

if(isset($_SESSION['name']) && isset($_SESSION['age']) && isset($_SESSION['class']) ){
    echo "Name =" . $_SESSION['name']."<br>"."AGE =" . $_SESSION['age']."<br>"."CLASS =" . $_SESSION['class'];
}
?>