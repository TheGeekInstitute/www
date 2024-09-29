<?php
function abcd(){
    echo 'ABCD';
}


// abcd();


// function  print_name($name){
//     echo "Hello, " . $name;
// }

// print_name("ABCD");



function sum($a,$b){
    return $a + $b;
}

// echo sum(5,10);


function table($num){
    for($i=1 ; $i<=10 ; $i++){
        echo $num . " x " . $i . " = " . $num*$i . "<br>";
    }
}


table(10);

table(173);

?>