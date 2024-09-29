<?php
setcookie("cookie","Ram",time()-(86400*30),"/");
if(isset($_COOKIE['cookie'])){
    echo "Cookie has been deleted";
}
?>