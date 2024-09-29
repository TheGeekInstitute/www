<?php
$a=100;
$b=200;


if($a>$b){
    echo $a . " is grater than " . $b;
}
else{
    echo $a . "is grater then " . $b;
}

$day=8;

switch($day){
    case 1: echo "sunday";
    break;
    case 2:echo "monday";
    break;
    case 3:echo "tuesday";
    break;
    case 4:echo "wednesday";
    break;
    case 5:echo "thursday";
    break;
    case 6:echo "friday";
    break;
    case 7:echo "saturday";
    break;
    default :echo "invaild day";
}

?>