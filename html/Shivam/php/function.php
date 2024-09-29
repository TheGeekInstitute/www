<?php

// function name(){
//     echo "spiky";
// }

// name();

// function name($name=""){
//     echo $name;
// }

// name();
// function sum($num1=0,$num2=0,$num3=0,$num4=0){
//     echo $num1 . $num2 . $num3 . $num4 ;
// }

// sum(1,4,6,7);

// function name($name=""){
//     if(!empty($name)){
//         return "Hi," . $name;}
//     else {
//         return "Enter the name :";
//     }
// } 
// echo name("spiky");


function &table($num=0){
    if($num>0){
        for($i=1 ; $i<=10 ; $i++){
            echo $num . " x " . $i . " = " .$i*$num . "<br>";
        }
    }
    else{
        echo "Please provide Grater Than Zero Number";
    }
        }
    


?>