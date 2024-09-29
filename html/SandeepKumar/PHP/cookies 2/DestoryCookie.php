<?php
if(isset($_COOKIE['name'])){
    setcookie("name", "", time() - (8600 * 30),"/");
}
else{
    echo"cookie has been deleted";
}



?>