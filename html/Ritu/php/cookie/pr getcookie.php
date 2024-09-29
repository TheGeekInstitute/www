<?php
if(isset($_COOKIE["cookie"])){
    echo "Hello,". $_COOKIE['cookie'];

}
else{
    echo "cookie is not found";
}


?>