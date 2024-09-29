<?php
// $age=20;

// if($age>=18){
//     echo "<I>confirm to vote<i>";
// }else{
//     echo "<I>you can not vote<I>";
// }
$x=85;
$y=83;
$z=53;
if($x>$y && $x>$z){
    echo $x . "<I>is grater then <I>". $y . " and" . $z ;
}
else if($y>$x && $y>$z){
    echo  $y ."<i>is grater then<i>" . $x . "and" . $z ;
}
else if($z>$x && $z>$y){
    echo $z ."<i>is grater then<i>" . $x.  " and " . $y;
}
else{
    echo "<b>all Numbers are equal<B>";
}
 




?>