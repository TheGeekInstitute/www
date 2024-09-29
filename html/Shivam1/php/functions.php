<?php
// function print_name(){
//     echo "Hi Abcd";
// }

// function print_name($name="",$age=""){
//     echo $name . $age;
// }
// print_name("sada",25);



// function print_name($name="",$age=""){
//    return $name . $age;
// }
// echo print_name("sada",25);


// function sum($a,$b){
//     return $a+$b;
// }

// echo sum(10,25);


// function print_name($name=""){
//     if(!empty($name)){
//         return "Hi, ". $name;
//     }
//     else{
//         return "Please Provide a Name";
//     }
// }


// echo print_name('AMit');


function table($num=0){
    $data="";
    if(!empty($num) && $num>0){
        for($i=1; $i<=10 ;$i++){
            $data .= $num . " x " . $i . " = " . $num*$i . "<br>";
        }
        return $data;
    }
    else{
        return "Please provide a Positive Number";
    }
}

// table(9);



// 
// echo "9 x 1 = 9 <br>" . "9 x 2 = 18";

// $data = "Amit <br>" . "Anil";
// $data .= "Sumit";
// $data .="Ravi";

// echo $data;

// function print_name($name=""){

//     if(!empty($name)){
//         return $name;
//     }
//     else{
//         return "Please Enter a name";
//     }

// }


//  print_name("Xyz");
// print_name();

function OddNumbers($start, $end) {
    for ($i = $start; $i <= $end; $i++) {
        if ($i % 2 != 0) { // Check if the number is odd
            return $i . " <br>";
        }
    }
}

// Call the function to print odd numbers from 1 to 10
echo OddNumbers(1, 10);


?>