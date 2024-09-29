<?php

abstract class Test{
    public $name;
    public function print_name(){
        echo 'hbjh545';
    }
}


class ABCD extends Test{
   
}

// $obj = new ABCD();
// $obj->print_name();

trait A{
    public function print_data(){
        echo "TEgdv";
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
}

class NewData{
    use A;
}

// $obj = new NewData();
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
        echo "Raghav";
    }

    public function print_b(){
        echo "Ravindra";
    }

    public function paiy(){
        echo "Piyush";
    }

}



$obj= new naya();
$obj->paiy();
?>