<?php
// echo min(45,245,46);
//  function print_name(){
//     echo "helo amit";
//  }
//     print_name();
//     print_name();
//     print_name();
//     print_name();
 
// function print_name($name){
//     echo " hi " . $name;
// }
// print_name("amit");
// print_name("ankit");

function sum($a,$b){
    return($a+$b);

}
// echo sum(14,35);
function teble($num){
    $data="";
    for($i=1 ; $i<=10 ; $i++){
        $data .=$num . " x " . $i . " = " . $num*$i . "<Br>";
    }
    return $data;
}
echo teble(10);

echo teble(20);


?>