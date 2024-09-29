<?php
class Fruits{

    public $name; //propertie
    public $color;

    public function __construct($name="",$color=""){
        $this->name = $name;
        $this->color = $color;
    }



    public function print_fruits(){
        //method
        if(!empty($this->name)){
            if(!empty($this->color)){
                return $this->name . " is a " . $this->color . " Fruit";
            }
            return $this->name . " is a Fruit";
        }
     
    }


    public function print_desc(){
      
        return $this->name . " asdjkashjkdas " .$this->color;
    }

    public function __destruct(){
        // echo "Function is ended";
    }

}

class Vegitables extends Fruits{
    public function __construct($name="",$color=""){
        $this->name = $name;
        $this->color = $color;   
    }

    public function print_vegetable(){
        //method
        if(!empty($this->name)){
            if(!empty($this->color)){
                return $this->name . " is a " . $this->color . " Vegitable";
            }
            return $this->name . " is a Vegetable";
        }
     
    }
}


class Powerful extends Vegetables{

}











// $obj = new Fruits("Apple","Red");



// echo $obj->print_fruits();


// echo $obj->print_desc();

// echo $obj->print_desc("Apple","red");

$veg_obj = new Powerful("Carrot","Orangered");


echo $veg_obj->print_vegitable();

?>