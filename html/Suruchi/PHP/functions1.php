<?php

// echo min(23,45,13,78,99);

// echo max(34,67,85,76,99);

// function print_name(){
//     echo "Hello ABCD XYZ";
// }

//     print_name();


// function print_name($name){
//     echo "Hello, " . $name;

// }

// print_name('XYZ ABCD');


// function sum($a,$b){
//     return $a+$b;
// }

// echo sum(34,56);
function table($num){
    $data="";
    for($i=1; $i<=10; $i++){
        $data .= $num . " x " . $i . " = " . ($num*$i) . "<br>";
    }

    return $data;
}

echo table(76);

?>