<?php


// $age=15;

// if($age>=18){
//     echo "You Can Vote";
// }

//  else{
//     echo "You Can Not Vote";
//  }

$a=10;
$b=12;
$c=17;
$d=20;
$e=25;

if($a>$b && $a>$c && $a>$d && $a>$e){
    echo $a . " is Grater than " . $b . " and " . $c . " and " . $d . " and " . $e;
  }
  else if($b>$a && $b>$c && $b>$d && $b>$e){
    echo $b . " is Grater than " . $a . " and " . $c . " and " . $d . " and " . $e;
  }

   else if($c>$a && $c>$b && $c>$d && $c>$e){
    echo $c . " is Grater than " . $a . " and " . $c . " and " . $d . " and " . $e;
   }

   else if($d>$a && $d>$b && $d>$c && $d>$e){
    echo $d . " is Grater than " . $a . " and " . $b . " and " . $c . " and " . $e;
   } 
   else if($e>$a && $e>$b && $e>$c && $e>$d){
    echo $e . " is Grater than " . $a . " and " . $b . " and " . $c . " and " . $d;
   }
   else{
       echo "All Numbrs Are Equal";

   }
   

?>