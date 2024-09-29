<?php
$age=17;

// if($age>=18){
//     echo "You can Vote";
// }
// else{
//     echo "You can not Vote";
// }


$a=13;
$b=13;
$c=13;

if($a>$b && $a>$c){
    echo $a . " is Grater than ". $b . " and " .$c;
}
else if($b > $a && $b > $c){
    echo $b . " is Grater than ". $a . " and " .$c;
}else if($c>$a && $c>$b){
    echo $c. " is Grater than ". $a . " and " .$b;
}
else{
    echo "All Numbers Are Equals";
}


?>