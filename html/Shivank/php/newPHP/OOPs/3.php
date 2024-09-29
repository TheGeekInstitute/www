<?php

// class Data{
//     public $name;
//     public $age;


//     protected function print_name(){
//         echo "Abcd";
//     }

//     private function abcd(){
//         echo "djkhasdjkas";
//     }

//     public function print_abcd(){
//         $this->abcd();
//     }
// }

// class NewClass extends Data{
//     public function print_data(){
//         $this->print_name();
//     }

// }
// $obj = new NewClass();

// $obj->print_abcd();

    class Text{
        public $name;
        public $age;
    
        private function name(){
            echo "Shivank";
        }

        public function print_name(){
            $this->name();
        }

}
    // class newText extends Text{
    //     public function print_name1(){
    //        $this->print_name();
    //     }
    // }

$obj = new Text();
$obj->print_name();
?>