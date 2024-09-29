<?php

// function print_name(){
//     echo "ABCD";
// }

// print_name();
// print_name();
// print_name();
// print_name();


// function print_name($name=""){
//     echo "Hello, " . $name;
// }

// print_name();



// function sum($a,$b){
//     return $a+$b;
// }



function sum($a="",$b=""){
    if(!empty($a) && !empty($b) && is_int($a) && is_int($b)){
        return $a+$b;
    }
    else{
        return "Please Provide two Numbers";
    }
}


echo sum();



?>