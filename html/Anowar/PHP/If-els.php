<?php



$age=17;


if($age<=17){
echo "No Vote";
}
else{ 
    echo "vote";
}
      
    


$a=1;
$b=7;
$c=6;
$d=1;


if($a>$b && $a>$c && $a>$d){
    echo $a . " is Grater than ". $b . " and ". $c . " and ".$d;

}
else if($b > $a && $b > $c && $b > $d){
    echo $b . " is Grater than ". $a . " and " .$c . " and " .$d;
}else if($c > $a && $c > $b && $c > $d){
    echo $c. " is Grater than ". $a . " and " .$b . " and " .$d;
}
else if($d > $a && $d > $b && $d > $c){
    echo $d. " is Grater than ". $a . " and " .$b . " and " .$c;
}
else{
    echo "All  Are Equals";
}
?>