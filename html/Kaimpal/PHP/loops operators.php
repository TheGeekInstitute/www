<?php
#while loops
$i=1;

// while($i<=50){
//     echo $i."<br>";
//     $i++;
// }

// while($i<=50){

//     if($i%2==0){
//         echo $i . "<br>";

//     }
//     $i++;
// }

// 
while($i<=50){

    if($i%2!=0){
        echo $i . "<br>";

    }
    $i++;
}

$names=["amit","sumit","Ravi","Ankit","Shivam"];
echo count ($name);

echo $name[1];
$a=0;
while($a<count($name)){
    echo $name[$a] ."<br>";
    $a++;
}
?>