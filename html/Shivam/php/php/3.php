<?php


$para="My Name is Khan Sir";

// echo strlen($para);

// echo str_word_count($para);
// echo strrev($para);

// echo strpos($para,"Khan");

// echo str_replace("Khan","Aman",$para);
// echo str_repeat("*",5);

// echo str_rot13("Nzna");

$d=strtotime("Now");
echo date("h:m:s",$d);

echo strtoupper("ram");
echo strtolower("RAM");

$num=5;
$num="5";
// var_dump(is_int($num));
echo "<br>";
var_dump($num);
echo "<br>";

$num=(int)$num;
var_dump($num);
echo "<br>";

// echo pi();
// echo min(45,12,80,14);
echo max(45,12,80,14);

echo abs(-4.528);
echo "<br>";

echo sqrt(25);
echo "<br>";

echo pow(10,4);
echo "<br>";

// echo rand();
echo rand(0,10);
// echo rand(0,10);
echo "<br>";

echo mt_rand(0,10);

$name="Aman";
$name="Shivam";
// echo $name;

define("name","Shivam");
// define("name","Shivamasdas");
echo name;

var_dump(defined("names"));

?>