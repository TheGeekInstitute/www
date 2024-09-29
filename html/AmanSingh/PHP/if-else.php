<?php
// $age=16;

// if($age>=18){
//     echo "You can Vote";
// }
// else{
//     echo "You can not Vote";
// }


$a=15;
$b=15;
$c=15;


if($a>$b && $a>$c){
    echo $a . " is Greater Than " .$b . " and ". $c;
}
else if($b>$a && $b>$c)
{
    echo $b . " is Greater Than " .$a . " and ". $c;
}
else if($c>$a && $c>$b)
{
    echo $c . " is Greater Than " .$a . " and ". $b;
}
else{
    echo "All Numbers Are Equals"; 
}







?>