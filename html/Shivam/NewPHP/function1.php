   <?php


// function num($num=""){
//     if(!empty($num) && $num>0){
//         $sum=0;
//         for($i=1; $i<=$num ;$i++){
//             echo $i."<br>";
//             $sum+=$i;
//         }
//         echo "SUM of all Above Numbers is : ". $sum;
//     }
  
// }
// num(100);
// function num($num=""){
//     if(!empty($num) && $num>0 && is_int($num)){
//         if($num%2==0){
//             $sum=0;
//         for($i=1; $i<=$num ;$i++){
//             $ss=2;
//             echo $num%$ss."<br>";
//             $sum+=$i;
//         }
//         echo "SUM of all Above Numbers is : ". $sum;
//         }
//     }
//     else{
//         echo "please enter he postive number";
//     }
  
// }
// num(6);"<br>";

// function check($num=""){
//     if(!empty($num) && $num>0 && is_int($num)){
//         $sum=0;
//         if($num%2==0){
//             for($i=0; $i<=$num ;$i+=2){
//                 $sum+=$i;
//                  echo $i."<br>";
//         }
//         echo " Sum Of all Evens : ". $sum;
//     }
//         else{
//             for($i=1; $i<=$num ;$i+=2){
//                 echo $i."<br>";
//                 $sum+=$i;
//         }
//         echo " Sum Of all odds : ". $sum;

//     }

// }

// }

// echo check(37);


function check($i="",$num=""){
    if(!empty($num) &&!empty($i) && $num>0 && is_int($num)){
        $sum=0;
        if($num%2==0){
            for($i; $i<=$num ;$i+=2){
                $sum+=$i;
                 echo $i."<br>";
        }
        echo " Sum Of all Even Numbers : ". $sum;
    }
        else{
            for($i; $i<=$num ;$i+=2){
                echo $i."<br>";
                $sum+=$i;
        }
        echo " Sum Of all odd Numbers : ". $sum;

    }

}

}

echo check(11,56);



?>