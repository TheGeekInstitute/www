<?php
#loops
$data=["a"=>"Apple","b"=>"BatMan","c"=>'Cow'];
$names=array("Aman","Vinit","Ravi","Shiavm","Ritu");

#while
$i=0;
// while($i<=10){
//     echo $i ."<br>";
//     $i++;
// }

// echo count($names);

// while($i<count($names)){
//     echo $names[$i];
//     $i++;
// }



#do while

// $i=100;

// do{
// echo $i . "<br>";
// $i++;
// }
// while($i<=10)



#for
// for($i=0 ; $i<=10; $i++){
//     echo $i . "<br>";
// }


#foreach

// foreach($names as $value){
//     echo $value . "<br>";
// }

// echo $data['a'];

foreach($data as $key => $value){
    echo $key . "->" . $value ."<br>" ;
}


?>