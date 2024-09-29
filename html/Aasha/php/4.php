<?php
// echo pi();

// echo min(10,15,25,35,5);

// echo max(10,15,25,35,5);

// echo abs(-25);

// echo pow(10,2);

// echo sqrt(100);

// echo round(10.44668);

// echo rand(0,100);
echo mt_rand(1000,9999);

define("NAME",'Amit');

// echo NAME;

var_dump(defined("NAME"));

// $age=17;

// if($age>=18){
//     echo "You Can Vote";
// }
// else{
//     echo "You can Not Vote";
// }


$num1=150;
$num2=1500;
$num3=140;

if($num1 > $num2 && $num1 > $num3){
    echo $num1 . " is Grater than " . $num2 . " and " . $num3;
}
else if($num2 > $num1 && $num2 > $num3){
    echo $num2 . " is Grater than " . $num1 . " and " . $num3;
}
else if($num3 > $num1 && $num3 > $num2){
    echo $num3 . " is Grater than " . $num1 . " and " . $num2;
}
else{
    echo "All Numbers are Equals";
}



?>