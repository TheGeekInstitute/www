<?php
class Info{
    protected $name;
    protected $age;
    // public $gender;

    public function __construct($n,$a){
        $this->name = $n;
        $this->age = $a;
        }

    // protected function print_data(){
    //     echo "Hello, " . $this->name . " age : " . $this->age ;
    // }


    private function print_data(){
        echo "Hello, " . $this->name . " age : " . $this->age ;

    }


    public function print_private(){
        $this->print_data();
    }

}


class Child extends Info{

    public function print_child(){
        echo 'Hello Form Child';
    }
}


class GrandChild extends Info{

    public function setVal($n,$a){
        $this->name = $n;
        $this->age = $a;
    }



}




$obj = new Info("ABCD",78);
// $obj->name="Bablu";

// $obj->setVal("ABCD",78);
$obj->print_private();

?>