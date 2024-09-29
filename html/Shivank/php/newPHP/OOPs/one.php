<?php
namespace one;
class Name{
    public $name;
    public function __construct($n){
        $this->name = $n;
    }

    public function print_name(){
        echo "😎 Hello From One  " . $this->name;
    }
}



?>