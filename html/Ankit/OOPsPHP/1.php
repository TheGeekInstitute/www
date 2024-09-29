<?php
class Student{

    public $name;
    public $age;

    public function __construct($n,$a){
        // echo "hello Form Autorun";
        $this->name=$n;
        $this->age=$a;
        
    }


    public function print_data(){
        return "Hello ". $this->name . " age : " . $this->age;
    }



    public function __destruct(){
        echo "Hello Form Last Line";
    }

}


$obj = new Student("Ravi",45);

// $obj->name="Amit";
// $obj->age=45;


echo $obj->print_data();


// $obj1 = new Student();
// $obj1->name="Sumit";
// $obj1->age=46;

// echo $obj1->print_data();



?>