<?php

// function print_name(){
//     echo 'Amit Singh';
// }

// print_name();
// print_name();


// function abcd($name=""){
//     echo "Hello, " .$name;
// }

// // abcd("Aman");
// abcd();


// function abcd($name=""){
//     if(!empty($name)){
//         return "Hello, " .$name;
//     }
//     else{
//         return "Please Provide a Name";
//     }
// }

// // abcd("Aman");
// echo abcd("Aman");



// function table($num=""){
//     $data="";
//     if(!empty($num) && $num>0){
//         for($i=1; $i<=10 ; $i++){
//             $data .= $num . " x " . $i . " = " . $num*$i . "<br>";
//         }
//     }
//     else{
//         $data = 'Please Provide a Number to Print its Table';
//     }

//     return $data;
// }



// echo table(40);


function table($num=""){
    $data="";
    if(!empty($num) && $num>0){
        for($i=1; $i<=10 ; $i++){
        $data .= $num . " X " . $i . "= " .$num*$i . "<br>";
    }
}
else{
    $data = 'Please Provid a Number to Print Its Table';
    
}

return $data;

}

echo table(10);
?>