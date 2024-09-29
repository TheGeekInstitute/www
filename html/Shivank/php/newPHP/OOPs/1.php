<?php
// class Print_name{
//     public $name;
//     public $age;

//     public function __construct($name,$age){
//         $this->name = $name;
//         $this->age = $age;
//     }

//     public function name(){
        
//         return $this->name;
//     }

//     public function age(){
//        return $this->age;
//     }
// }




// $obj = new Print_name("Amit",25);

// echo $obj->name();
// echo $obj->age();

class Print_name{
    // public $name;
    // public $fruit;
    public $class;


    public function __construct($name,$class){
    $this->name =$name;
    $this->class =$class;
    }
    public function name(){
        return $this->name;
    }

    public function class(){
        return $this->class;
    }

    public function __destruct(){
        echo " End of Functions";
    }

}

    $obj = new Print_name("Shivank ",10);

    echo $obj->name();
    echo $obj->class();
?>