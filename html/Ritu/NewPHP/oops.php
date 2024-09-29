<?php

class Car{
    public $name="";
    public $speed="";

    function car_name($name=""){
        return  $name;
    }

    function car_speed($speed=""){
        return $speed . "K/m";
    }
}


// $obj = new Car();

// echo $obj->car_name("BMW");


// echo $obj->car_speed(200);

class Math{
    public $num;

  public  function tabe($num=0){
        for($i=1;$i<=10;$i++){
            echo $num . " x " .  $i . " = " . $i*$num . "<br>";
        }
    }

   public  function srno($num){
        for($i=1;$i<=$num;$i++){
            echo $i . "<br>";
        }
    }


}


$math_obj = new Math();


// $math_obj->tabe(25);

$math_obj->srno(10);


?>