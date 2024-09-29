<?php
abstract class Student{
    public $name;
    public $age;

    public function __construct($n,$a){
        $this->name=$n;
        $this->age=$a;
    }

   abstract public function print_data();

}

interface Color{
    public function print_color();
}


class Child implements Color{
    
    public function print_color(){
        echo 'red';
    }

    public function print_data(){
        echo "Child Function " . $this->name . " : Age " . $this->age;
    }
}


// $obj = new Child();

// $obj->print_color();


trait ABCD{
    public function print_abcd(){
        echo 'Hello ABCD';
    }
}



trait XYZ{
    public function print_xyz(){
        echo 'Hello XYZ';
    }
}

class A{
    use ABCD,XYZ;

    public function abcd(){
        echo "Hello Form ABCD";
    }
}


class B{
    use ABCD;

}

class C{
    use ABCD,XYZ;
}



$obj = new A();

$obj->abcd();



?>