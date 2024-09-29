<?php
setcookie("cookie","Ram",time()+(86400*30),"/");
if(isset($_COOKIE['cookie'])){
    echo "The Cookie Has Been Setted";
}
else{
    echo "This is not able to set cookie";
}

?>