<?php

function check($num=""){
    if(!empty($num) && $num>0 && is_int($num)){
        if($num%2==0){
            return  $num . " is an even Number";
        }
        else{
            return  $num . " is a odd Number";

        }
    }
    else{
        return "Please enter a Positive the number";
    }
}

echo check(38);

// function enter($name="",$sname="",$age=""){
//     if(!empty($name) ){
//         if(!empty($age)){
//             if(!empty($age)){

//                 // return "Name"."=". $name . "<br>" . "Sir Name" ."=". $sname ."<br>"."Age"."=".$age;
//                 return "Have a Good Day sir, You are ".$name . $sname."Your age is ".$age;
//             }
//             else{
//               return "Please enter your age";
                
//             }

//         }
//         else{
//         return "Please enter your sir name";

//         }
//     }
//     else{
//         return "Please enter your name";
//     }
// }
// echo enter("amit","kumar",42);

function digit($num){
    if(!empty($num) && $num>0 ){
        
        for($i=1; $i<=10 ; $i++){
                echo $i;
            }

       

    }
    else{
       echo "Please enter positive number";
    }
}


 digit(10);


// function table($num=""){
//     if(!empty($num)){
//         for($i=1; $i<=10 ; $i++){
//             return $num . " x " . $i . " = " . $i*$num . "<br>";

//         }
//     }
//     else{
//         return "Please Enter a Number";
//     }
// }
// echo table(10);
?>