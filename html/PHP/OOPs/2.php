<?php

class Data{
    // public $name;
    private $name;



    public function __construct($inp){
    $this->name = $inp;

    }



//    public function print_data(){
//     echo $this->name;
//     }


private function print_data(){
    echo $this->name;
    }


public function my_data(){
    $this->print_data();
}


// public function setVal($inp){
//     $this->name = $inp;
// }

}



$obj = new Data("Mani");
// $obj->name="Amit";

// $obj->print_data();


// $obj->setVal("Bablu");
// $obj->setVal("babita");



$obj->my_data();

?>