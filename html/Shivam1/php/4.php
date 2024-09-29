<?php
$age=2;


// if($age>=18){
//     echo 'Your can vote ';
// }
// else{
//     echo "Your Can Not Vote";
// }


// echo ($age>18) ?  "You Can Vote" :  "You can not vote";


$a=19;
$b=10;
$c=10;

if($a>$b && $a>$c){
    echo $a . " is Grater Than " . $b . " and " .$c;
}
else if($b>$a && $b>$c){
    echo $b . " is Grater Than " . $a . " and " .$c;
}
else if($c>$a && $c>$b){
    echo $c . " is Grater Than " . $a . " and " .$b;
}
else{
    echo "All numbers are Equal";
}

?>



