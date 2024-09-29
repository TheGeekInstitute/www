<?php

class Student{
    public $name;
    public $age;

//construct//
    // public function __construct($n,$a){
    //     // echo "Auto Run";
    //     $this->name=$n;
    //     $this->age=$a;
    // }


    // public function setVal($n,$a){
    //     $this->name=$n;
    //     $this->age=$a;
    // }


    public function print_data(){
        echo 'Hello , ' . $this->name . " Age : " .$this->age;
    }

    //destruct//
    public function __destruct(){
        echo "hello Form last Function";
    }
}



$obj = new Student("XYZ",52);

$obj->name="ABCD";
$obj->age=25;

// $obj->setVal('ABCD',78);

$obj->print_data();



?>