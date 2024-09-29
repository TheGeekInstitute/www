<?php
session_start();

if(isset($_SESSION['name']) && isset($_SESSION['age'])){
    echo $_SESSION['name'] . $_SESSION['age'];
}
else{
    echo "No session Found";
}

?>