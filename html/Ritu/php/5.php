<?php
//if
//if else
//if elseif

$num=7;
if($num>5){
    echo "Number is Grater Than Five";
}
else if($num==5){
    echo " Number is  five";
}
else{
    echo "Number is less Than Five";
}

echo "<br>";

// switch($num){
//     case 0 :
//     case 1 : echo "One";
//             break;           
//     case 2 : echo "Two";
//             break;
//     case 3 : echo "Three";
//             break;
//     case 4 : echo "four";
//             break;
//     case 5 : echo "Five";
//             break;   
//     default : echo "Invalid Number";
// }
// echo "<br>";
// echo $num==5 ? "Five" : "false";



switch($num){
        case 0 :
        case 1 : echo "one";
               break;
        case 2 : echo "two";
              break;
        case 3 : echo "three";
              break;
        case 4 : echo "four";
             break;
        case 5 : echo "five";
             break;
        case 6 : echo "six";
             break;
        case 7 : echo "seven";
             break;
        default : echo "Invalid Number";

}





?>