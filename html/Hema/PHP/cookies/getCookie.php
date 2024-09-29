<?php
if(isset($_COOKIE['name'])){
    echo "Hello, " . $_COOKIE['name'];
}
else{
    echo "No Cookie Found";
}


?>