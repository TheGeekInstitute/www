 <!-- <?php 

// class Student{
//     public $name;
//     public $age;

//     public function __construct($n,$a){
//         echo "Hello From Auto Run <br>";
//         $this->name = $n;
//         $this->age = $a;
//     }


//     public function print_data(){
//         echo "Hello, " . $this->name . " age : " . $this->age ;
//     }

//     public function __destruct(){
//         echo "<br> Hello form last line";
//     }
// }




// $std_obj = new Student("Ravi",15);
// $std_obj->name = 'Amit';
// $std_obj->age=45;


// var_dump($std_obj);


// $std_obj->print_data();
// $std_obj->name = 'Aasdsa';

// $std1_obj = new Student();

// $std1_obj->name = "Sumirt";
// $std1_obj->age=42;
// $std1_obj->print_data();


// ?> -->
<?php

class Student{
    public $name;
    public $age;

     public function __construct($n,$a){
         echo "Hello From Auto Run <br>";
         $this->name = $n;
         $this->age = $a;
     }


     public function print_data(){
         echo "Hello, " . $this->name . " age : " . $this->age ;
     }

     public function __destruct(){
         echo "<br> Hello form last line";
     }
 }




 $std_obj = new Student("Ravi",15);
//  $std_obj->name = 'Amit';
//  $std_obj->age=45;


//  var_dump($std_obj);


//  $std_obj->print_data();
//  $std_obj->name = 'Aasdsa';

//  $std1_obj = new Student();

//  $std1_obj->name = "Sumirt";
//  $std1_obj->age=42;
//  $std1_obj->print_data();


?>
