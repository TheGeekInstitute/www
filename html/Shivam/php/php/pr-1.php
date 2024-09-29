<?php
echo("Hello Php");
echo"<br>";
  $name= "Spiky";

  echo($name);

  $var=1;
  $var1=1.02;
  $var2="spike";
  $var3=true;

  #integer#
  echo "<br>";
  var_dump($var);

#float#
 echo "<br>";
 var_dump($var1);

 #string#
 echo "<br>";
 var_dump($var2);

#boolen#
echo "<br>";
var_dump($var3);


$name="Spiky";
$name1="shivam";
$name2="Mohit";
print "<br>";
 echo ($name) ;    # echo and print are same function with diff. name#
Print "<br>";
 print ($name1);
 Print "<br>";
 print ($name2);
 
$name=array("Aman","Sonu","Mohit","Ronit");


echo("<pre>");
var_dump($name);
Print "<br>";

echo("<pre>");
 print($name[2]);


 $nam=["Aman","Sonu","Mohit","Ronit"];

 print ($name[2]);
 Print "<br>";
 $abcd=["x" => "Apple","b"=>"ball","c"=>"Cartoon"];

 echo $abcd["x"];
 echo "<br>";
 
 #Multidimensional arrays
 $multi=[["a","b","c"],[1,2,3],["i","ii","iii"]];
 
 // var_dump($multi[0]);
 
 echo $multi[2][1];

 print count($nam);











 

?>