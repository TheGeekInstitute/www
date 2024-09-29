<?php

// $x=date("H");

// if($x > "20") {
//     echo "Have a nice day!";
// }
// else{
//    echo "Have a good night";

// }




$a=100;
$b=100;
$c=100;
if($a > $b && $a > $c ){
    echo $a ." Is Greater then " . $b . " and ".$c;
}
else if( $b > $a && $b > $c){
    echo $b ." Is Greater then " . $a . " and ".$c;
}
else if($c > $a && $c > $b){
    echo $c ." Is Greater then " . $a . " and ".$b;
}
else{
    echo "All Numbers are Equal <br>";
}


$num=3;

switch($num){
    case 0 : echo "Zero";
                break;
    case 1 : echo "One";
                break;    
    case 2 : echo "Two";
                break;
    case 3 : echo "Three";
                break;
    case 4 : echo "Four";
                break;
    default : echo "Number is Grater Than 4 or Less Than 0 or Invalid Number";
}




?>