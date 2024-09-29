<?php

abstract class Test{
    public $name;
    public function print_name(){
        echo 'ABCD';
    }
}


class ABCD extends Test{
   
}

// $obj = new ABCD();
// $obj->print_name();

trait A{
    public function print_data(){
        echo "Data";
    }


}

trait B{
    public function print_data1(){
        echo "Data1";
    }
}


class Data{
    use A;
    use B;

    public function asdad(){

    }
}

class NewData{
    use A;
}

// $obj = new Data();
// $obj->print_data();
// $obj->print_data1();

interface A1{
    public function print_a();
}

interface B1{
    public function print_b();
}

interface C1{
    public function print_c();
}


class naya implements A1,B1{
    public function print_a(){
        echo "A1";
    }

    public function print_b(){
        echo "B1";
    }

    public function aaa(){
        echo "aaa";
    }

}



$obj= new naya();
$obj->aaa();
?>