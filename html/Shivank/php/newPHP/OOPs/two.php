<?php
namespace two;
class Name{
    public $name;
    public function __construct($n){
        $this->name = $n;
    }

    public function print_name(){
        echo "Hello From Two " . $this->name;
    }
}
