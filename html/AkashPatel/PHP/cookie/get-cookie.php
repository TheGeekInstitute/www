<?php

if(isset($_COOKIE['name'])){
    echo "Hello, " . $_COOKIE['name'];
}
else{
    echo "No cookie Found";
}

// var_dump($_COOKIE['name']);

?>