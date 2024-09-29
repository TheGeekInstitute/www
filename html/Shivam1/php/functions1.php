<?php

function print_name($name=""){
    return  "Hello " . $name;
}


function sum($num1=0,$num2=0){
    return $num1+$num2;
}


// echo sum(10,25);

// print_name("Amit Singh");

// print(max(10,25,45));


function check_num($num=0){
    if($num>0){
        if($num%2==0){
            return $num  .  " is an Even Number";

        }
        else{
            return $num  .  " is a odd Number";
        }
    }
    else{
        return "Please Provide a Positive Number";
    }
}


// echo check_num(25);


function tabe($num){
    $table="";
    if($num>0){
        for($i=1;$i<=10;$i++){
            $table .= $num . " x " . $i . " = " . $num*$i . "<br>";
        }
        return $table;
    }
    else{
        return "Please Provide a Positive Number";
    }
}


// echo tabe(15);


function check($num=0){
    $sum=0;
    $print="";
    if($num>0){
        if($num%2==0){
            for($i=0;$i<$num;$i+=2){
                $sum+=$i;
                $print.= $i . "<br>";
            }
            return $print . "<br> The Sum of All Above " .$sum;

        }
        else{
            for($i=1;$i<$num;$i+=2){
                $sum+=$i;
                $print.= $i . "<br>";
            }
            return $print . "<br> The Sum of All Above " .$sum;
        }
    }
    else{
        return "Please Provide a Positive Number";
    }
}


function check1($num=0){
    $sum=0;
    $print="";
    if($num>0){
       
            for($i=0;$i<$num;$i+=2){
                $sum+=$i;
                $print.= $i . "<br>";
            }
            $print .="<br> The Sum of All Above " .$sum . "<br>";


            $sum=0;

            for($i=1;$i<$num;$i+=2){
                $sum+=$i;
                $print.= $i . "<br>";
            }

            return $print . "<br> The Sum of All Above " .$sum;
        }
       
       
    
    else{
        return "Please Provide a Positive Number";
    }
}
// echo "<br>";
echo check1(13);


function iterateArray($arr) {
    foreach ($arr as $item) {
        echo $item . "\n";
    }
}


$myArray = [1, 2, 3, 4, 5];
iterateArray($myArray);


?>