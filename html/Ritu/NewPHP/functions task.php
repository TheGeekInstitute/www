<?php
$num="";
function  num($num){
    $sum=0;
    if(!empty($num)){
        for($i=1;$i<=10;$i++){
            echo $i . "<br>";
            $sum+=$i;
        }
        echo "The Sum Of all Numbers is : ".$sum;
    }
    else " Please Enter a Number";
}
// echo num(10);
 function check($num=""){
    if(!empty($num) && ($num>0) && is_int($num)){
        $sum=0;
        if($num%2==0){
            for($i=0;$i<=$num;$i+=2){
                echo $i . "<br>";
                $sum+=$i;
            }
            echo "Sum of All above even numbers :" .$sum;
        }
        else{
            if($num%2!=0){
                for($i=1;$i<=$num;$i+=2){
                    echo $i . "<br>";
                    $sum+=$i;
                }
                echo "Sum of All above odd numbers :" .$sum;
            }
        }
    }
 }
 
check(26);   








?>