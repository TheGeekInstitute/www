<?php

$name="Amit Singh";

setcookie("name",$name,time() + 86400 , "/" );
echo "Cookie Has Been Setted";
?>