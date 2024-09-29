<?php


// $sum=0;
// $num=10;
// for($i=1; $i<=$num ; $i++){
//     $sum+=$i;
// }

// echo $sum;




// $result=1;
// $num=4;
// for($i=1; $i<=$num ; $i++){
//     $result*=$i;
// }
// echo $result;



// function sum($n){
//     if($n==0){
//         return 0;
//     }

//     return $n + sum($n-1);
// }


// echo sum(10);


function fact($n){
    if($n==0 || $n==1){
        return 1;
    }

    return $n * fact($n-1);
}


echo fact(4);




?>