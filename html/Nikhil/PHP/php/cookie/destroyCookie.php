<?php

setcookie("name","Ritu",time() - (86400 * 30),"/");

if(!isset($_COOKIE['name'])){
    echo "cookie has been deleted";
}
?>