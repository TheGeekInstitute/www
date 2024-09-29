<?php
//  function name(){
//     echo "naam";
//  }
//  name();

//  echo "<br>";


//  function name($name=""){
//     echo $name;
//  }
//  name();

// function sum($num1=0,$num2=0){
//     echo $num1+$num2;
// }

// sum(25,10);

// function table($num=0){
//     if($num>0){
//        for($i=1;$i<=10;$i++){
//         echo  $num . " x " . $i . " = " . $num*$i . "<br>";  
//        }
//     }
// }
// table(6)

function name($name=""){
    if(!empty($name)){
        for($i=1;$i<=10;$i++){
            echo $i . " . " . $name . "<br>"; 
        }
    }
        else{
            echo "Please Enter a Name";
        
    }
}
name("Ram");

// function name($name="",$num=1){
//     if(!empty($name)){
//         for($i=1;$i<=$num;$i++){
//             echo $i .  ". ". $name . "<br>"; 
//         }
//     }
//     else{
//         echo "Please Enter a Name";
//     }
// }


// name("Aman",200);


?>

