<?php

// $age=15;

// if($age>=18){
//     echo "You can Vote";
// }
// else{
//     echo "You can not Vote";
// }


$a=10;
$b=12;
$c=17;
$d=20;


if($a>$b && $a>$c && $a>$d){
    echo $a . " is Grater Than " . $b . " and " . $c . " and ". $d;
}
else if($b>$a && $b>$c && $b>$d){
    echo $b . " is Grater Than " . $a . " and " . $c . " and " . $d;
}
else if($c>$a && $c>$b && $c>$d){
    echo $c . " is Grater Than " . $a . " and " . $b . " and " . $d;
}
else if($d>$a && $d>$b && $d>$c){
    echo $d . " is Grater Than " . $a . " and " . $b . " and " . $c;
}
else{
    echo "All Numbers Are Equal";
}

?>