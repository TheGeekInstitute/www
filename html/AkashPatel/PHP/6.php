<?php
//Loops In php
$names=array("Aman","Vinit","Ravi","Shiavm","Ritu");
$abcd=["Aman","Vinit","Ravi","Shiavm","Ritu"];
$i=0;


#while

// while($i<=10){


//     $i++;

//     if($i==3){
//        continue;
//     }


//     echo $i . "<br>";


//     // if($i==3){
//     //     break;
//     // }

// }


// do{
// echo $i ."<br>";
// $i++;
// }
// while($i<=10);



// for($i=1; $i<=10 ; $i++){
//     echo $i . "<br>";
// }


$data=["a"=>"Apple","b"=>"BatMan","c"=>'Cow'];

// echo $data['a'];

// foreach($abcd as $value){
//     echo $value . "<br>";
// }

foreach($data as $key => $value){
    echo  $key . '->' .  $value . "<br>";
}




?>