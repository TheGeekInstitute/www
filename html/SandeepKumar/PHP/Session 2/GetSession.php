<?php

session_start();

if(isset($_SESSION['name'])){
echo"hello, " . $_SESSION['name'];
}

else{
    echo"session not found";
}


?>