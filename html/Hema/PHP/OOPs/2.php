<?php
class user{
    public $name;
    public $age;
    public $city;


    public function __construct($n,$a,$c){
        
       $this->name=$n;
       $this->age=$a;
       $this->city=$c;
    }



    public function setVal($n,$a,$c){
        $this->name=$n;
        $this->age=$a;
        $this->city=$c;
    }

public function print_data(){
    echo"Hii !!!,". $this->name. "age :". $this->age. "city :" .$this->city;
}

public function __distract(){
    echo "this is last function";
}

}

$obj = new user("seema",45,"delhi");


$obj->name="neetu";
$obj->age="45";
$obj->city="delhi";


// $obj ->setVal('neha',25,'pune');



$obj->print_data();



?>