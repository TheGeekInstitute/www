<?php
$age=10;

if($age>=18){
    echo "You can Vote";
}else{
    echo 'You can Not Vote';
}


echo "<br>";
echo "<br>";
echo "<br>";


$a=20;
$b=40;
$c=90;

if($a>$b && $a>$c){
    echo $a . " is Grater Than " . $b . " and  ". $c;
}
else if($b>$a && $b>$c){
    echo $b . " is Grater Than " . $a . " and  ". $c;
}
else if($c>$a && $c>$b){
    echo $c . " is Grater Than " . $a . " and  ". $b;
}
else{
    echo "All Numbers Are Equal";
}

echo "<br>";
echo "<br>";
echo "<br>";



?>