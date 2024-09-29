<?php
    // abstract class User{
    //     public $name;
    //     public $age;

    //     public function __construct($n,$a){
    //         $this->name = $n;
    //         $this->age = $n;
    //     }
    //     abstract public function print_data();
    // }

    // class Child extends User{
    //     // public function print_data(){
    //     //     echo "Child Function " . $this->name . " : Age " . $this->age;
    //     // }

    //     public function print_data(){
    //         echo "Child Function ". $this->name . " : Age " . $this->age;
    //     }
    // }

    // $obj = new Child("Akash",45);

    // $obj->print_data();


    interface Color{
        public function names();
    
    
    }

class aa implements Color{
    public function names(){
        echo "hllo world";
    }
}

$obj = new aa();
$obj->names();
?>