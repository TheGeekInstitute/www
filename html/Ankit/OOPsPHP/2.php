<?php
class Student{

    public $name;
    public $age;

    public function __construct($n,$a){
        
        $this->name=$n;
        $this->age=$a;

    }
    public function print_data(){
        return "Hello ". $this->name . " age : " . $this->age;
    }

    // public function __destruct(){
    //     echo "Hello From Last Name";

    // }

}

$obj= new Student("Amit",25);
// $obj= new Student("Rahul",20);

echo $obj->print_data();

?>