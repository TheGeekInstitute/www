<?php
if(isset($_COOKIE['name'])){
    echo "Hi, ". $_COOKIE['name'];
}
else{
    echo "name not found";
}


?>