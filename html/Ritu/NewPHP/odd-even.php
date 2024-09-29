<?php

// $num="";

function checkNum($num=""){
    $msg="";
    if(!empty($num) && $num>0 && is_int($num)){

        if($num%2==0){
            $msg=  $num." is an Even Number";
        }
        else{
            $msg = $num." is a Odd Number";
            
        }

    }
    else{
        $msg = "Please Enter a Valid Number";
    }


    return $msg;

}



echo checkNum(250);

?>