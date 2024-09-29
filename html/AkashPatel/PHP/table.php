<?php

function tabele_print($num=""){
    $data="";

    if($num != "" && is_int($num)){
        for($i = 1; $i<=10; $i++){
            $data .= $num . "x". $i . "=" . $i*$num . "<br>";
        }
    }
    else{
        echo("pls provide a number");
    }
    return $data;
}
echo tabele_print(12);



$arry = [
    [
        [1],[2],[3]
    ],
    [
        [a],[b],[c]
    ],
    [
        [A],[B],[c]
    ]
    ];



?>