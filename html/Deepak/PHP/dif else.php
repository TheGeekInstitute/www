<?php
$age=17;
if($age>=18){
    echo"you can vote";
} else{
       echo "you can not vote";

    }

echo "<br> <br>";

$a=12;
$b=12;
$c=12;

if($a>$b && $a>$c){
    echo $a . "is greter then" . $b . "and" . $c;
}
else if($b>$a && $b>$c){
    echo $b ." is greter then " . $a . "and" . $c;
}
else if($c>$a && $c>$b){
    echo $c . "is gerter then" . $c . "and" . $b;
}
else{
    echo "all number are equals";
}

?>