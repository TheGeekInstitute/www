<?php

// echo min(45,235,65);

// function print_name(){
//     echo "hello Amit";
// }

// print_name();
// print_name();
// print_name();
// print_name();
// print_name();

// function print_name($name){
//     echo "Hi, " . $name;
// }


// print_name("Sumit");
// print_name("Ravi");


// function sum($a,$b){
//     echo $a+$b;
// }

function sum($a,$b){
    return $a+$b;
}


// echo sum(10,12);

function table($num){
    $data="";
    for($i=1; $i<=10 ; $i++){
        $data .= $num . " x " . $i . " = " . $num*$i . "<br>";
    }

    return $data;
}


echo table(10);

echo table(20);




?>