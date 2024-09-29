<?php

// echo max(45,25,78,12,36);


// function print_name(){
//     echo 'Hello I am ABCD';
// }


// print_name();
// print_name();
// print_name();
// print_name();
// print_name();


// function print5($name){
//     echo str_repeat($name . " ",5);
// }


// print5("AMit");


function sum($a,$b){
    return $a+$b;
}


// echo sum(45,6); 


function table($num){
    for($i=1; $i<=10 ; $i++){
        echo $num . " x " . $i . " = " . $num*$i . "<br>";
    }
}



table(10);

echo "<br>";

table(45);

echo "<br>";

table(1337);
?>