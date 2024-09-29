<?php
$name="ABCD XYZ";
setcookie("name",$name,time() + (86400 * 30) , "/");
echo "Cookie has Been Settetd";

?>