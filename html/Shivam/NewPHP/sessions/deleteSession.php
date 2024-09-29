<?php
session_start();

// session_destroy();


if(!isset($_SESSION['name'])){
    echo "Session Has Been Destoryed";
}



unset($_SESSION['age']);



?>