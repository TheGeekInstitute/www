<?php
setcookie('name','Ritu',time()+(86400*30),"/");
if(isset($_COOKIE['name'])){
    echo "Cookie has been setted";
}
else{
    echo "can not able set cookie";
}
?>