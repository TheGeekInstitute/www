<?php

class Student{
    public $name;
    public $age;

    
    public function __construct($a,$b){
        echo "<br>Hello From Autorun<br>";
        $this->name = $a;
        $this->age=$b;

    }
    
    
    public function print_data(){
        echo "Hello , " . $this->name . " age : " . $this->age;
    }


    public function __destruct(){
        echo "<br>hello From End";
    }




}


$obj = new Student("Amit",45);
$obj = new Student("Amita",5);


// $obj->name="Amit";
// $obj->age=45;

echo $obj->print_data() ;


// $obj1 = new Student();

// $obj1->name="Ravi";

// echo $obj1->print_data();





?>