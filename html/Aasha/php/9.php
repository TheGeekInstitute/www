<?php
function print_name(){
    echo "Amit Singh";
    echo "Sumit Verma";
}


print_name();

function print_name($name){
    echo "Hi, " . $name;
}

print_name(24);
print_name("Sumit");


function sum($a=0,$b=0){
    return $a . " + " . $b . " = " . $a+$b;
}



echo sum(1,5);

function sr_no($num=0){
    $sr="";
    if($num>0){
         for($i=1; $i <= $num ; $i++){
            $sr .= $i . "<br>";
        }
        return $sr;
    }
    else{
        return "Please provide a Positive Number";
    }
}


echo sr_no(5);


function table($num=0){
    $table="";
    if($num>0){
        for($i=1; $i <= 10 ; $i++){
            $table .= $num . " x " . $i. " = " . $num*$i. "<br>";
        }
        return $table;
    }
    else{
        return "Please provide a Positive Number";
    }
}


echo table(10);




?>