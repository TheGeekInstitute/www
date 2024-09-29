<?php

// $days=30;
// $num=1;

// for($i=1; $i<=$days; $i++){
//     echo $num . "<br>";
//     $num*=2;  //$num = $num * 2


// }


function num($num){
    $result="";
    if($num>0){
        for($i=1;$i<=10;$i++){
            $result .= $num . "x" . $i . "=" .  $num*$i . "<br>";
        }
        return $result;
    }
}

// echo num(5);

function arr($arr){
    $data="";
    if(is_array($arr)){
        for($i=0 ; $i<count($arr) ; $i++){
            $data .= $arr[$i] . "<br>";
        }
        return $data;
    }
    else{
        return "Please provide an Array";
    }
}




$name=["AMit","Sumit",'Ravi','Ankit'];

echo arr("sdaf");



?>