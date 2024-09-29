<?php
class data{
    private $name;

    private function print_name($name){
         print_r($name);
    }

    #_set
    #when try to set Property
    // public function __set($prop_name,$value){
    //     if(property_exists(__CLASS__,$prop_name)){
    //         echo "Your are Trying to set value of Private Property : " . $prop_name . " : " . $value;
    //     }
    //     else{
    //         echo " You are  trying Non existing property";
    //     }
    // }
    #_get
    #when try to get property
    // public function __get($prop_name){
    //     if(property_exists(__CLASS__,$prop_name)){
    //         echo "Your are Trying to set value of Private Property";
    //     }
    //     else{
    //         echo " You are  trying Non existing property";
    //     }
    // }
    
    // public function __call($method,$args){
    //     if(method_exists(__CLASS__,$method)){
            
    //            echo "You are tring to access private Method :  " .$method  . " " . implode(" ",$args);
    //         //    echo "<br>";
    //         //    echo $this->print_name($args);
    //     }
    //     else{
    //         echo "You are tring to access non-existing Method ". $method;
    //     }


    // }
    }
class newData{
    private static $name;
    
    private static function print_name(){
        echo self::$name;

    }


    public static function __callStatic($method,$args){
        if(method_exists(__CLASS__,$method)){
            echo "You are trying to access private method" . " : " . " ".  $method ." " . implode("/",$args);

        }
        else{
          echo  "You are trying to access non existing method" . " : " . $method;
        }
    }
}
class ADCD{
    public function print_class(){
        echo __CLASS__;
    }
}


$obj = new Data();
// $obj->name = "sumit";
newData::print_name("Ravi",2554);
// $obj->print_name1("dasd",554);

?>