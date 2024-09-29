<?php

// echo min(12,15,78,1,5);

// function print_name(){
//     echo "Hello ABCD";
// }


// print_name();


// function print_name($name){
//     echo "Hi, " . $name;
// }

// print_name('AZZZ');


// function sum($a,$b){
//     return $a+$b;
// }

// echo sum(45,15);


function table($num){
    $data="";

    for($i=1; $i<=10; $i++){
        $data .= $num . " x " . $i . " = " . ($num*$i) . "<br>";
    }

    return $data;
}


echo table(55);


echo table(5);





?>