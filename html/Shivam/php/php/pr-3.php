<?php
$name="This is hypertext preprocesser";

echo strlen($name);
echo "<br>";

echo str_word_count($name);
echo "<br>";

 echo strrev($name);
echo "<br>";

 echo strpos($name,"is");
echo "<br>";

 echo strpos($name,"preprocesser");
echo "<br>";

echo str_repeat("*",5);
echo "<br>";
echo "<br>";

echo str_repeat($name,100);

echo str_replace("is","name",$name);


echo str_rot13("Preprocesser");
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

 echo strtotime("Now");
 echo "<br>";
 echo "<br>";

 echo date("h:m:s", strtotime("Now"));
echo "<br>";
 
echo strtoupper("spiky");
echo "<br>";
echo "<br>";

echo strtolower("SPIKY");
echo "<br>";
echo "<br>";
$num=10;
  
echo "<br>";
var_dump (is_int($num));

echo "<br>";
echo "<br>";
var_dump (is_int($num));

echo "<br>";
$num=(int)$num;
var_dump($num);
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