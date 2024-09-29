<?php
$name="ABCD XYZ";

setcookie("name",$name, time() + (86400 * 30) ,"/" );
echo "cookie has been Setted";


?>