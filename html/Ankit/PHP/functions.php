<?php

// function print_name(){
//     echo "Amit Singh";
// }

// print_name();
// print_name();
// print_name();
// print_name();


function print_name($name){
    // echo $name;
    if(!empty($name)){
        return "Hi, ". $name;
    }
    else{
        return 'Please Provide a Name';
    }
}

// echo print_name("ABCD");

function table($num){
    $data="";
    if(!empty($num) && is_int($num)){
        for($i=1; $i<=10 ;$i++){
            $data .= $num . " x " . $i . " = " . $num*$i . "<br>";
        }
    }
    else{
        $data= "Please provide a Number";
    }

    return $data;
}



echo table(103);
echo table(1337);


?>