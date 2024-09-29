<?php
session_start();

if(isset($_SESSION['name'])){
    echo "Hello, " . $_SESSION['name'];
}
else{
    echo "No Session Found";
}

?>