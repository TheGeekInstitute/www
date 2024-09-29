<?php
// function print_name(){
//     echo 'Amit Singh';
// }


// print_name();
// print_name();

// function print_name($name){
//   echo $name;
// }

// print_name("Abcd");
// function print_name($name=""){
// return $name;
// }
// echo print_name();


function table($num=""){
    $data="";

    if(!empty($num)  && is_int($num)){
       for($i=1 ; $i<=10 ; $i++){
        $data .= $num . " x " . $i . " = " . $num*$i . "<br>";
       }
    }
    else{
        $data = "Please Provide a Number";
    }
    return $data;
}
echo table(78);


// $abcd = [[1,1,1],[2,2,2],[3,3,3]];


if($_SERVER['REQUEST_METHOD']=="GET"){
    if(isset($_GET['num'])){
        $num=$_GET['num'];

        



    }
}



?>


<form  method="get">
    <input type="number" name="num">
    <input type="submit">
</form>