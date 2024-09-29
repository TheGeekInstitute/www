<?php
class Car{
   public $name;
   public $speed;

    public function car_name ($name=""){
        return $name . " is Awsome.";
    }

    public function car_speed($speed=0){
        return $speed . " Km/h";
    }

}


$obj = new Car();

// echo $obj->car_name("BMW");
// echo $obj->car_speed(60);



class Math{
    public $num;

    function sr_no($num){
        for($i=1;$i<=$num;$i++){
            echo $i . "<br>";
        }
    }

    function table($num){
        for($i=1;$i<=10;$i++){
            echo $num . " x " . $i . " = " . $i*$num . "<br>";
        }
    }
    function digit($num){
        if(!empty($num) && $num>0 ){
            
            for($i=1; $i<=$num ; $i++){
                    echo $i;
                }
    
           
    
        }
        else{
           echo "Please enter positive number";
        }
    }
    
    function tabla($num=""){
            if(!empty($num)){
                for($i=1; $i<=10 ; $i++){
                    return $num . " x " . $i . " = " . $i*$num . "<br>";
        
                }
            }
            else{
                return "Please Enter a Number";
            }
        }
        function enter($name="",$sname="",$age=""){
    if(!empty($name) ){
        if(!empty($age)){
            if(!empty($age)){

                
                return "Have a Good Day sir, You r ".$name . $sname."Your age is ".$age;
            }
            else{
              return "Please enter your age";
                
            }

        }
        else{
        return "Please enter your sir name";

        }
    }
    else{
        return "Please enter your name";
    }
}
function check($i="",$num=""){
    if($i <=$num){
        if(!empty($num) &&!empty($i) && $num>0 && is_int($num)){
            $sum=0;
            if($num%2==0){
                for($i; $i<=$num ;$i+=2){
                    $sum+=$i;
                     echo $i."<br>";
            }
            echo " Sum Of all Even Numbers : ". $sum;
        }
            else{
                for($i; $i<=$num ;$i+=2){
                    echo $i."<br>";
                    $sum+=$i;
            }
            echo " Sum Of all odd Numbers : ". $sum;
    
        }
    
    }
    }
    else{
        echo "First Value Should Be greater.";
    }

}

}
$math = new Math();
// echo $math->enter("amit","kumar",42);
// echo$math->digit(13);
echo '<br>';
echo $math->tabla(32);
echo $math->check(3,32);
// $math->sr_no(10);
// $math->table(758);



?>