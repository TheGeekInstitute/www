<?php

$name="AMit";

setcookie("name",$name, time() + (8600 * 30) , "/");
echo "Cookie Has Been Setted";

?>