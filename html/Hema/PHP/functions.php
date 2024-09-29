<?php

// echo max(45,25,12,36);


// function abcd(){
//     echo "hello World";
// }

// abcd();
// abcd();
// abcd();
// abcd();



// function print_name($name){
//     return "hello, " . $name;
// }


// function print_name($name=""){
   
//     if(!empty($name)){
//         return "hello, " . $name;
//     }
//     else{
//         return "Please Provide a Name";
//     }
   
// }


// echo print_name('ABCDXYZ');



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .box{
            border: 2px solid black;
            margin:5px;
            display:inline-block;
            height: 200px;
            width:130px;
        }
    </style>
</head>
<body>

<?php

function table($num){
    $data="";
    for($a=1; $a<=10 ; $a++){
        $data .= $num . " x " . $a . " = " . $num*$a . "<br>";
    }
    return $data;
}


for($j=1 ; $j<=100 ; $j++){
    echo '<div class="box">'.table($j).'</div>';
}



?>

   
</body>
</html>