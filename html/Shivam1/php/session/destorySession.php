<?php
session_start();

if(isset($_SESSION['name']) && isset($_SESSION['age'])){
    session_destroy();
    echo "session deleted";
}
else{
    echo "No session Found";
}

?>