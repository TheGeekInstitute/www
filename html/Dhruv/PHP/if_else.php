<?php
$num1=1500;
$num2=200;
$num3=300;
$num4=400;

if ($num1<$num2 &&$num1<=$num3 &&$num1<=$num4 ) {
    echo "10 is less then every Number";
}

elseif($num2<$num1 &&$num2<=$num3 &&$num2<=$num4 ){
    echo "20 is less then every Number";

}
elseif($num3<$num1 &&$num3<=$num2 &&$num3<=$num4 ){
    echo "30 is less then every Number";

}

elseif($num4<$num1 &&$num4<=$num2 &&$num4<=$num1 ){
    echo "40 is less then every Number";

}
else("nothing")
?>