<?php

// $age=17;
// if($age>=18){
//     echo 'You can vote';
// }

// else{
//     echo 'you can not vote';
// }


// $a=10;
// $b=13;
// $c=15;


// if($a>$b && $a>$c){
//     echo $a . " is Grater Than " . $b . " and " . $c;
// }
//  else if($b>$a && $b>$c){
//     echo $b . " is Grater Than " . $a . " and " . $c;
// }


//   else if($c>$a && $c>&b ){
//     echo $c . "is grater than" .$a ." and " . $b;
// }

// else{
//   echo 'All Numbers Are Equal';
// }


$a=10;
$b=13;
$c=15;
$d=17;

if ($a>$b && $a>$c && $a>$d){
  echo $a ."is grater then" .$b ." and " .$c ." and " .$d;
}
else if ($b>$a && $b>$c && $b>$d){
  echo $b ."is grater then" .$a ." and " .$c ." and " .$d;
}

else if ($c>$a && $c>$b && $c>$d){
  echo $c ."is grater then" .$b ." and " .$a ." and " .$d;
}

else if ($d>$a && $d>$b && $d>$c){
  echo $d ."is grater then" .$b ." and " .$a ." and " .$c;
}

?>
