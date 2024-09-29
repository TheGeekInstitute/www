<?php
if(isset($_COOKIE['name'])){
setcookie("name","",time() - (86400 * 30) , "/");
   
}
else{
    echo "No Cookie Found";
}


?>