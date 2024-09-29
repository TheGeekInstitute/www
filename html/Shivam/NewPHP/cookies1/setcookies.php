<?php


echo "<pre>";

$name="Shivam";
$age=29;
$class=12;
$var=setcookie('name',$name, time() + 86400 ,"/");
$var1=setcookie('age',$age, time() + 86400 ,"/" );
$var2=setcookie('class',$class,time() + 86400 ,"/" );

var_dump($var);

?>