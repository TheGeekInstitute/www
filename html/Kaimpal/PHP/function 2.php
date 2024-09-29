<?php

// function ABCD(){
// echo'abcd';
// }

// abcd();

// function print_name($name){
//     echo " hello, " . $name;

// }

// print_name("ABCD")

// function sum($a,$b){
//     return $a+$b;
// }

// echo sum(5,10)

function table($num){
    for($i=1 ; $i<=10 ; $i++){
        echo $num . " x " . $i . " = " . $num*$i . "<br>";
    }
} 

table(10);
echo "<br>";
table(13);
echo "<br>";

table(85);
echo "<br>";

table(12.5);


?>
