<?php

if(isset($_COOKIE['name'])){
    echo"hello  " . $_COOKIE['name'];
}

else{
    echo"cookie not found";
}


?>