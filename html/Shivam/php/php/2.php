<?php
$var=32;
$var1=25.125;
$var2="ABCD";
$var3=true;

#integer
var_dump($var);
echo "<br>";

#float
var_dump($var1);
echo "<br>";

#string
var_dump($var2);
echo "<br>";

#boolean
var_dump($var3);
echo "<br>";

$name="Ritu";
$name="Shivam";

echo $name;

$num1=12;
$num2=13;

echo "<br>";
print $num1+$num2;

#Indexed arrays - Arrays with a numeric index
echo "<br>";
$names=array("Aman","Vinit","Ravi","Shiavm","Ritu");
$name1=["Aman","Vinit","Ravi","Shiavm","Ritu"];

echo "<pre>";
var_dump($names);
echo "<br>";

echo $names[1];
echo "<br>";

echo count($names);

#Associative arrays

$abcd=["x" => "Apple","b"=>"ball","c"=>"Cartoon"];

echo $abcd["x"];
echo "<br>";

#Multidimensional arrays
$multi=[["a","b","c"],[1,2,3],["i","ii","iii"]];

// var_dump($multi[0]);

echo $multi[2][1];

?>