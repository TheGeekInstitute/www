<?php
// $age=18;

// if($age>=18){
//     echo 'You can Vote';
// }
// else{
//     echo "You can not Vote";
// }



$a=70;
$b=70;
$c=70;

if($a>$b && $a>$c){
    echo $a . " is Grater Than " . $b . " and " . $c;
}else if($b>$a && $b>$c){
    echo $b . " is Grater Than " . $a . " and " . $c;
}else if($c>$a && $c>$b){
    echo $c . " is Grater Than " . $a . " and " . $b;
}
else{
    echo 'All Numbers Are Equal';
}


?>