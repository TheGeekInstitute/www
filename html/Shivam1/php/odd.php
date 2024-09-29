<!-- <form action="" METHOD="POST">
<input type="number" name="num">
<input type="submit">
</form>

<br>
<br>
<br> -->



<?php

// if(isset($_REQUEST['num']) && !empty($_REQUEST['num'])){
//     $num = $_REQUEST['num'];

//     for($i=1 ; $i <=10 ; $i++){
//         echo $num . " x " . $i . " = " . $num*$i . "<br>";
//     }
    
// }

$num=133;

// for($i; $i<=20; $i+=2){
//     echo $i. "<br>";}

// for($i; $i<=20; $i+=2){
//     echo $i. "<br>";}

if($num%2==0){
echo "All Evens <br>";
for($i=0; $i<=20; $i+=2){
    echo $i. "<br>";
}

}
else{
    echo "All Odds <br>";
    for($i=1; $i<=20; $i+=2){
        echo $i. "<br>";
    }
    
}




?>