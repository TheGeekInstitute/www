<?php

class Data{
    // public $name;
    protected $name;
    private $xyz;

    public function getVal(){
        echo $this->xyz;
    }
}


class Child extends Data{

    protected function abcd(){
        echo 'Printing ABCD';

    }

 



}


class GrandChild extends Child{


    public function setVal($n){
        $this->name=$n;
    }

    // private function aa(){
    //     echo "adasdasdas";
    // }

    // public function print_something(){
    //     $this->aa();
    // }

  
}




// $abcd = new GrandChild();

$abcd = new GrandChild();


// $abcd->name="ABCD";

// $abcd->setVal("Hello World");

$abcd->getVal();

// $abcd->print_something();

$abcd->xyz="asdasd";

// $abcd->aa();


?>