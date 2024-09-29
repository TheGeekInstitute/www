<?php
// abstract class A{
//     public $name;
//     public function __construct($n){
//         echo $this->name = $n;
//     }
// }

// class B extends A{

// }

// interface A{
//     function print_name($name);
// }

// interface B{
//      function print_age($age);
// }


// class C implements A,B{
//    public function print_name($name){
//     echo $name;
//     }

//     public function print_age($age){
//         echo $age;
//     }
// }





// $obj = new C();

// $obj->print_name("AMIT");


class Data{
    public static $name = "Amit";
    public static $age = 25;

    public static function show(){
        echo self::$name . " You are" . self::$age;
    }

}

// Data::$name="Sumit";
// Data::show();

class Abcd extends Data{

    public static $name = "Sumit";
    public static $age = 35;

    public static function show(){
        echo parent::$name . " You are" . parent::$age;
    }

}




Abcd::show();


class Goodbye {
    const LEAVING_MESSAGE = "Thank you for visiting W3Schools.com!";
    public  function byebye() {
      echo self::LEAVING_MESSAGE;
    }
  }

//   Goodbye::byebye();


$obj = new Goodbye();

$obj->byebye();




?>