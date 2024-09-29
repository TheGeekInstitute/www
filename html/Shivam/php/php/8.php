<?php
// function name(){
//     echo "Naam";
// }

// name();

// function name($name=""){
//     echo $name;
// }

// name();

// function sum($num1=0, $num2=0){
//     echo $num1 + $num2;
// }


// sum(10,25);

// function name($name=""){
//     if(!empty($name)){
//         return "Hi, " . $name;
//     }
//     else{
//         return "Please Enter a name";
//     }
// }

// echo name("sdf");


function table($num=0){
    if($num>0){
        for($i=1;$i<=10;$i++){
            echo $num . " x " . $i . " = " .$i*$num . "<br>";
        }
    }
    else{
        echo "Please provide Grater Than Zero Number";
    }
}


table(5);

?>