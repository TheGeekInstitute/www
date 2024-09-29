<?php
session_start();
if(isset($_SESSION['name'])){
    session_destroy();
    echo "Tabaaaaaaahiiiiiiiii";
}
else{
    echo "Session not found";
}


?>