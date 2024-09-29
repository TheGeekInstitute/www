<?php

$i=1;

// do{
//     echo $i . "<br>";
//     $i+=2;
// }while ($i<=20);
// for($i=1 ; $i <= 10 ; $i++){
//     echo $i . "<br>";
// }



function print_name($name=""){
    
    if(!empty($name)){
        return "Hi, ".$name;
    }
    else{
        return "Please Enter Name";
    }
    
}

// echo print_name("dasdas");
// print_name();


function sum($a=0,$b=0){
    if($a>0 && $b>0){
        return $a+$b;
    }
    else{
        return "Please Provide two Numbers";
    }
}


// echo sum(4,5);



//     function table($num=0){
// for($i=1 ; $i <= 10 ; $i++){
//         echo $num . " x " . $i . " = " . $num*$i ."<br>";
//     }
// }




// table(3);

 function divide($num=0){
    for($i=1 ; $i <= 10 ; $i++){
        echo $num . " / " . $i . " = " . $num/$i . "<br>";
    }
 }
 
divide(12,3);

echo min(41,12,87);
echo max(15,455,90.211);

?>