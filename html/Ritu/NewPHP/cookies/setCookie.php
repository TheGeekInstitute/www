<?php
$name='Ritu';

$var=setcookie("name",$name, time() + (86400 * 30),"/");


if($var){
    echo "Cookie has been Setted";
}

?>