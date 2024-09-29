<?php
// $age=45;


// if($age>=18){
//     echo "You can Vote";
// }
// else{
//     echo "You can not vote";
// }



$a=12;
$b=15;
$c=10;

if($a>$b && $a > $c){
    echo $a  . " is grater than " . $b . " and " . $c;
}
else if($b>$a && $b>$c){
    echo $b  . " is grater than " . $a . " and " . $c;
}
else if($c>$a && $c > $b){
    echo $c  . " is grater than " . $a . " and " . $b;
}
else{
    echo "All Numbers are Equals";
}



?>