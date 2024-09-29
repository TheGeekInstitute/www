<?php

// class Data{
//     public $name;
//     public $age;


//     public function print_name(){
//         echo "Abcd";
//     }
// }


// class NewClass extends Data{
//     public function print_age(){
//         echo 25;
//     }

// }





// $obj = new NewClass();

// $obj->print_age();

class Text{
    public $name;
    public $age;
     
    public function print_name(){
        echo "Shivank";
    }
}

    class newText extends Text{
        public function print_name(){
            echo "Ram";
        }
    }

$obj = new newText();
$obj->print_name();
?>