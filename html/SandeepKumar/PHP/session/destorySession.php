<?php
session_start();
if(isset($_SESSION['name'])){
    session_destroy();
    echo "session Has Been Deleted";
}
else{
    echo 'No Session Found';
}

?>