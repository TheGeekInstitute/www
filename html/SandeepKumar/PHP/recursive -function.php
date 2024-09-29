<?php

$num=100;


// function sum($n){
    
//     if($n==0){
//         return 0;
//     }

//     return $n + sum($n-1);
// }


// echo sum($num);



function fact($num){
    if($num==0 || $num==1){
        return 1;
    }

    return $num * fact($num-1);
}


echo fact(4);










// $sum=0;
// for($i=1; $i<=$n ; $i++){
//     $sum+=$i;
// }

// echo $sum;


?>