<?php

$i=1;

// while($i<=10){
//     echo $i . "<br>";
//     $i++;
// }


// do{
//     echo $i . "<br>";
//     $i++;  
// }while($i<=10);



// for($i=1; $i<=10 ; $i++){
//     echo $i ."<br>";
// }



$arr=["Amit",'Sumit',"Ravi",'Ankit',"Bablu",'Sita'];

// echo count($arr);

// for($i=0; $i< count($arr) ; $i++){
//     echo $arr[$i] . "<br>";
// }

// echo $arr[1];


// foreach($arr as $val){
//     echo $val . "<br>";   
// }


$data=["a"=>"Apple","b"=>"BatMan","c"=>"Cow"];


foreach($data as $key => $val){
    echo $key . " -> " . $val . "<br>" ;
}

?>