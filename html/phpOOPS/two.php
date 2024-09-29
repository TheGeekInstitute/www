<?php
namespace abcd;
class Name{
    public $name;
    public function __construct($n){
        $this->name = $n;
    }

    public function print_name(){
        echo "Hello from File two " .$this->name;
    }
}

?>