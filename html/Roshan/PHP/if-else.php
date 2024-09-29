<?php
// $age=17;

// if($age>=18){
//     echo "You can Vote";
// }
// else{
//     echo "You can not Vote";
// }



$a =450;
$b=450;
$c=450;


if($a>$b && $a>$c){
    echo $a . " is grater than " .$b . " and " . $c;
}
else if($b>$a && $b>$c){
    echo $b . " is grater than " .$a . " and " . $c;
}
else if($c > $a && $c >$b){
    echo $c . " is grater than " .$a . " and " . $b;
}
else{
    echo "All Numbers are Equals";
}


?>