<?php
$age=17;

if($age>=18){
    echo "You can vote";
}else{
    echo "You can not vote";
}


echo "<br><br>";

$a=15;
$b=17;
$c=12;

if($a>$b && $a>$c){
    echo $a . " is Grater Than " . $b . " and " . $c;
}
else if($b>$a && $b>$c){
    echo $b . " is Grater Than " . $a . " and " . $c;
}
else if($c>$a && $c>$b){
    echo $c . " is Grater Than " . $a . " and " . $b;
}
else{
    echo "All Numbers Are Equals";
}


?>