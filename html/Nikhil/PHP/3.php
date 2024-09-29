<?php


$para="My Name is Khan Sir";

echo strlen($para);
echo "<br>";

echo str_word_count($para);
echo "<br>";

echo strrev($para);
echo "<br>";


echo strpos($para,"Khan");
echo "<br>";


echo str_replace("Khan","Aman",$para);
echo "<br>";
echo "<br>";
echo "<br>";

echo str_repeat("This is my website",100);
echo "<br>";
echo "<br>";
echo "<br>";

echo str_rot13("Nzna");
echo "<br>";

$d=strtotime("Now");
echo date("h:m:s",$d);
echo "<br>";

echo strtoupper("ram");
echo "<br>";

echo strtolower("RAM");
echo "<br>";

$num=5;
$num="5";
var_dump(is_int($num));
echo "<br>";
var_dump($num);
echo "<br>";

$num=(int)$num;
var_dump($num);
echo "<br>";

echo pi();
echo "<br>";

echo min(45,12,80,14);
echo "<br>";

echo max(45,12,80,14);
echo "<br>";

echo abs(-4.528);
echo "<br>";

echo sqrt(25);
echo "<br>";

echo pow(10,4);
echo "<br>";

echo rand();
echo "<br>";

echo rand(0,10);
// echo rand(0,10);
echo "<br>";

echo mt_rand(0,10);
echo "<br>";

$name="Aman";
$name="Shivam";
echo $name;
echo "<br>";

define("name","Aman");
// define("name","Shivamasdas");
echo name;

var_dump(defined("name"));

?>