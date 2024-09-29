<?php

session_start();

unset($_SESSION['name'] );
unset($_SESSION['age'] );

if(!isset($_SESSION['name']) && !isset($_SESSION['age']) && !isset($_SESSION['class']) ){
    echo " Session has been destroyed";
}
else{
    echo "Session has not been destroyed";
}

?>