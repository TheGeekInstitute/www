<?php

class data{
    private $name="ABCD";

    private function print_name(){
        echo $this->name;
    }

    #__set();
    //when trying to setting value to private property
    public function __set($prop_name,$value){
        if(property_exists($this,$prop_name)){
            echo "Your are Trying to set value of Private Property : " . $prop_name . " : " .$value;
        }
        else{
            echo "You are trying to setting a value to non-existing property " . $prop_name . " : " . $value;
        }

    }

    //When trying to getting or accessing a private property
    public function __get($prop_name){
        if(property_exists($this,$prop_name)){
            echo "You Are trying to acces private Property";
        }
        else{
            echo "You are tying to access non-existing property";
        }
    }

    
    public function __call($method,$args){
       if(method_exists($this,$method)){
           echo "You are tring to acees a Private Method " .$method . " : " . implode(",",$args);
          

       }
       else{
        echo "You are tring to acees a non-Existing Method " .$method . " : " . implode(",",$args);

       }
       
    }
}


class newData{
    private static $name;

    private static function print_name(){
        echo self::$name;
    } 


    public static function __callStatic($method,$args){
        if(method_exists(__CLASS__,$method)){
            echo "Your are trying to access private static method " . $method . implode(",",$args) ;
        }
        else{
            echo "You are trying to access non-existing static method " .$method . implode(",",$args) ;
        }
    }

}


class ABCD{
    public function print_class(){
        echo __CLASS__;
    }
}



class test{
    private $name = "ABCD";
    private $age=25;
    public $gender;
    public $ret_val="You are Printing an Object";

    public function __isset($prop){
        if(property_exists(get_class(),$prop)){
            if(isset($this->$prop)){
                echo  "Value is setted " . $this->$prop ;
               
            }
        }
        else{
            echo "You are Trying to access private property : " . $prop;

        }
    }


    public function __unset($prop){
        if(property_exists(__CLASS__,$prop)){
            unset($this->$prop);
            echo "Property Unsetted";
        }
        else{
            echo "You Are trying to unsetting a private property";
        }
    }


    public function print_prop($prop){
       echo  $this->$prop;
    }


    public function __toString(){
       
        return $this->ret_val;
    }

    public function __invoke(){
        echo "You are calling an object as a function";
        // echo $this->name;
    }

}

// $obj = new data();
// $obj->age = "Amit";

//  $obj->print_name();

// $obj->print_name();


// newData::$name = "My name is abcd";

// newData::print_age("ABCD",12345);

// $obj= new ABCD();
// $obj->print_class();

$obj = new test();
// echo $obj->name;
// echo isset($obj->name);
// unset($obj->name);

// $obj->print_prop("name");


// echo $obj;

$obj();



?>