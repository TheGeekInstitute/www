<?php
$num=0;


switch($num){
    case 0:echo "asd";
    case 1 : echo "One";
        break;
    case 2 : echo "Two";
    break;
    case 3 : echo "Three";
    break;

    case 4 : echo "Four";
    break;

    case 5 : echo "Five";
    break;

    case 6 : echo "Six";
    break;
    default : echo "Invalid Number";
}

echo "<br>";

$num=11;

if($num%2==0){
    echo  $num  . " is an even number";
}
else{
    echo  $num  . " is a odd number";
}


?>