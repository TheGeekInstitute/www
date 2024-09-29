<?php

class Students{
    public $name;
    public $age;
    private $my_name;

    public function __construct($n,$a){
        // echo 'Hello From autoload';
        $this->name = $n;
        $this->age=$a;
    }

    public function __destruct(){
        echo 'hello from last line';
    }

    private function name(){
        return "Hello,  " . $this->name . "  and you are " .$this->age . " Years old";
    }


    protected function name1(){
        return "Hello,  " . $this->name . "  and you are " .$this->age . " Years old";
    }

    public function print_data(){
        // return $this->name();
        return $this->name1();

    }


}


class SubStudent extends Students{

    public function print_data1(){
        // return $this->name();
        return $this->name1();
    }
}



$obj = new SubStudent("Amit",25);

// $obj->name ="Amit";
// $obj->age=78;


// echo $obj->name();
// 
echo $obj->print_data1();
// $obj->my_name="ABCD";


//method overriding
//method overloading
//


?>

