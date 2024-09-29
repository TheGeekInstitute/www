<?php
class One{

    private $name;

    private function sum($a,$b){
        echo $a + $b;
    }


    public function print_data1(){
        $this->sum(4,10);
    }
}


class Two extends One{

    
    // public function print_data(){
    //     $this->sum(4,10);
    // }
}



$obj = new One();

// $obj->name = "Amit";

$obj->print_data1();




class Old{
    public $name;

    public function print_name(){
        echo "Hi, " . $this->name;
    }

}


class NewOne extends Old{
    public $name;
    public function print_name(){
        echo "Hello, " . $this->name;
    }

}



$obj = new NewOne();

$obj->name="Amit";

$obj->print_name();




?>