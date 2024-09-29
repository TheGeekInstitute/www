<?php
 class Number{
     public $num;

     
    // function print_table($num){
    //     for($i=1;$i<=$num;$i++){
    //         echo $i . "x" . $num . "=" . $i*$num . "<br>";
    //     }
    // }

      
    function print_table($num){
        for($i=1;$i<=$num;$i++){
            echo $i  . " / " . $num . "=" . $i/$num . "<br>";
        }
    }

    // function print_table($num){
    //     for($i=0;$i<=$num;$i++){
    //         echo $i . "-" . $num . "=" . $i-$num . "<br>";
    //     }
    // }
    // function print_table($num){
    //     for($i=1;$i<=$num;$i++){
    //         echo $i . "/" . $num . "=" . $i/$num . "<br>";
    //     }
    // }
    
 }

$obj = new Number();
$obj->print_table(2);

?>