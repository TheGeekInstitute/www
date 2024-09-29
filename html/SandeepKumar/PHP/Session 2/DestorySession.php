<?php
session_start();

if(isset($_SESSION['name'])){
    session_destroy();
    echo"session has been destroyed";

}
else{
    echo"No session found";
}



?>