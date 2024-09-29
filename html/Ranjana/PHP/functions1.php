<?php
// echo max(45,90,89,45,35);


// function print_name(){
//     echo'hello i am ranjana';
// }
// print_name();
// print_name();
// print_name();
// print_name();
// print_name();


function print5($name){
    echo str_repeat($name . " ",5);
    
}
print5('amit');
function sum($a,$b){
    return $a+$b;
}

echo sum(45,45);
function table($num){
    for($i=1; $i<=10 ; $i++){
        echo $num . " x " . $i . " = " . $num*$i . "<br>";
    }
}



table(10);

echo "<br>";

table(55);

echo "<br>";

table(17);
?>