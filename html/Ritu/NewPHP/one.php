<?php
namespace one;
class Name{
    public $name;
    public function __construct($n){
        $this->name = $n;
    }

    public function print_name(){
        echo "One File . "  . $this->name;
    }
}

?>