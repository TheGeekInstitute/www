<?php
session_start();
if(isset($_COOKIE['cookie'])){
    session_destroy();
    echo "destroooooyed";
}
else{
    echo "Session not found";
}


?>