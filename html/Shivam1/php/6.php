<?php

$a=77;
$b=76;
$c=79;
$d=78;

if($a>$b && $a>$c && $a>$d){
    echo $a . " is Grater Than " . $b . "," . $c . " and " .$d;
}
else if($b>$a && $b>$c && $b>$d){
    echo $b . " is Grater Than " . $a . "," . $c . " and " .$d;
}
else if($c>$a && $c>$b && $c>$d){
    echo $c . " is Grater Than " . $a . "," . $b . " and " .$d;
}
else if($d>$a && $d>$b && $d>$c){
    echo $d . " is Grater Than " . $a . "," . $b . " and " .$c;
}
else{
    echo "All numbers are Equal";
}


?>