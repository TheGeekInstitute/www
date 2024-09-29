<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops</title>
    <style>
        .box{
            background-color:red;
            height:30px;
            width:30px;
            display:inline-block;
            margin:3px;
        }
    </style>
</head>
<body>

<?php

$names=["Amit","Sumit",'Ravi','Ankit'];

$data=["a"=>"Apple","b"=>"Banana","c"=>"Carrot"];


#While Loop
$i=1;

// while($i<=10){
//     echo $i ."<br>";
//     $i++;
// }



#Do While Loop
// do{
//  echo $i ."<br>";
//  $i++; 
// }while($i<=10);


#For Loop
// for($i=1; $i<=10 ; $i++){
//     echo $i . "<br>";
// }

// echo count($names);


// $i=0;
// while($i<count($names)){
//     echo $names[$i]  . "<br>";
//     $i++;
// }


// for($i=0; $i<count($names) ; $i++){
//     echo $names[$i] . "<br>";
// }


#Foreach Loop

// foreach($names as $value){
//     echo $value . "<br>";
// }


// foreach($data as $key => $value){
//     echo $key . " -> " . $value . "<br>";
// }



for($i=1; $i<=100 ; $i++){
    echo '
    <div class="box">'.$i.'</div>
    ';
}


echo "<br>";


$num=117;

for($i=1 ; $i<=10 ; $i++){
    echo $num . " x " . $i . " = " . $num*$i . "<br>";
}



?>

</body>
</html>