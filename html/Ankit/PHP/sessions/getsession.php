<?php

session_start();

if(isset($_SESSION['name'])){
    echo "Hi, " . $_SESSION['name'];
}
else{
    echo "No Session Found";
}

?>