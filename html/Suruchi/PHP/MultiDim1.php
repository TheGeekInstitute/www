<?php

$arr=[[1,2,3],[4,5,6],[7,8,9]];

// echo $arr[0][0];

// for($i=0; $i<count($arr); $i++){
//    for($j=0; $j<count ($arr[$i]) ; $j++){

//     echo $arr[$i][$j] . " ";
// }
//       echo "<br>";
// }

for($i=0; $i<count($arr);$i++){
      for($j=0; $j<count($arr[$i]); $j++){
            echo $arr[$i][$j] . " ";
      }
      echo "<br>";
}





?>