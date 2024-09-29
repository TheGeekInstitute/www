<?php
function table ($num=""){
    $data='';
    if(!empty($num)&& $num>0){
        for($i=1; $i<=10 ; $i++){
            $data .= $num . " X " . $i . "= " .$num*$i . "<br>";

        }

    }
    else{
        $data = 'Please Provid a Number to Print Its Table';
    }

    return $data ;
}

echo table (444);


function cable ($num=""){
    $data="";
    if(!empty($num) && $num>0){
        for($i=1; $i<=10; $i++){
            $data .= $num . "X" . $i ." = " . $num*$i . "<br>";
        }
    }
    else{
        $data ='Please Provid A Number to print its table ';
    }
    return $data ;
    
}
echo    table (8);




function tabal ($num=""){
    $data ="";
    if(!empty ($num) && $num>0){
        for($i=1; $i<=10; $i++){
            $data .= $num . "X" . $i . " = " . $num*$i . "<br>";
            
        }
    }
    else{
        $data ='Please Provide A Number To Print  Its Table';
    }
    return $data ;
}
 echo tabal (40) ;





 

?>