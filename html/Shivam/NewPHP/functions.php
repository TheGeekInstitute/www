<?php

$num=2;

// for($i=1; $i<=10 ; $i++){
//     echo $num . " x " . $i . " = " . $i*$num . "<br>";
// }


function name($name="",$age=""){

if(!empty($name)){

    if(!empty($age)){

        return "Hello, " .$name . " you are " . $age . " Years Old.";

    }
    else{
        return "Please Enter age";
    }
}
else{
    return "Enter Your Name ";
}

}


// echo name("Amit",10);

function table($num=""){
    if(!empty($num)){
        for($i=1; $i<=10 ; $i++){
            echo $num . " x " . $i . " = " . $i*$num . "<br>";

        }
    }
    else{
        echo "Please Enter a Number";
    }
}



// table(10);


// echo pi();


function sum($num1="",$num2=""){
    if(!empty($num1) && !empty($num2)){
        return $num1+$num2;
    }
    else{
        return "Please Enter Two Numbers";
    }
}


// sum(10,10);

// if(sum(10,25)>=10){
//     echo "Grater";
// }
// else{
//     echo "Less";
// }
// echo min(10,12,15);

function multi($num="",$num2="") {
    if(!empty($num) && !empty($num)){
        return $num*$num2;

    }
    else{
        return "please Enter Two Number";
    }
}
echo multi(20,30);
?>