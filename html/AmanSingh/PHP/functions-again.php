<?php
// function abcd(){
//     echo "ABCD";
// }
// abcd();


function xyz($name=""){
    echo "Hello, " . $name;
}
// xyz("ABCDEFGHIJKLMNOP");
// xyz();


function print_name($name=""){
    if(!empty($name)){
        return "Hello, " . $name;
    }
    else{
        return "Please Enter A Name";
    }
}

// echo print_name();


function sum($a=0,$b=0){
    return $a+$b;
}

// echo sum(45,25);





?>