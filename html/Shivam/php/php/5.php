<?php
//if
//if else
//if elseif

$num=2;

// if($num>5){
//     echo "Number is Grater Than Five";
// }
// else if($num==5){
//     echo " Number is  five";
// }
// else{
//     echo "Number is less Than Five";
// }

echo "<br>";

switch($num){
    case 0 :
    case 1 : echo "One";
            break;           
    case 2 : echo "Two";
            break;
    case 3 : echo "Three";
            break;
    case 4 : echo "four";
            break;
    case 5 : echo "Five";
            break;   
    default : echo "Invalid Number";
}

echo $num==5 ? "Five" : "False";

$num=5;

switch($num){
        case 0 :
        case 1 : echo " one ";
        break;
        case 2 : echo " Two ";
        break;
        case 3 : echo " Three ";
        break;
        case 4 : echo " Four ";
        break;
        case 5 : echo " Five ";
        break;

        case 6 : echo " Six "; 
        break;       
        case 7 : echo " seven ";
        break;        
        case 8 : echo " Eight "; 
        break;       
        case 9 : echo " Nine ";  
        break;      
        case 11 : echo " Eleven "; 
        break;       
        case 12: echo " Twelve ";  
        break;      
        case 13: echo " Therteen "; 
        break;       
        case 14: echo " Fourteen ";        


}

?>