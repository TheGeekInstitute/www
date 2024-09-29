<?php
$name="Amit Singh";


setcookie("name",$name,time() + 86400 , "/");
echo "cookie has been setted";

?>