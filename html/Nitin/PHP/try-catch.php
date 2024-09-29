<?php

// try{
//     $age=17;

//     if($age>=18){
//         echo "True";
//     }
//     else{
//         throw new Exception("This is an error");
//     }


// } catch(Exception $e){
//     echo "Error";
// }



function divide($dividend, $divisor) {
  if($divisor == 0) {
    throw new Exception("Division by zero");
  }
  return $dividend / $divisor;
}

try {
  echo divide(10, 5);
} catch(Exception $e) {
  echo "Unable to divide.";
}




?>