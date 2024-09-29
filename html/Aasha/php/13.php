<style>
    .box{
        height:100px;
        width:100px;
        background-color:red;
        margin:10px;
        display:inline-block;
        text-align:center;
        line-height:100px;
        font-size:60px;
    }
</style>

<?php


$i=1;

while($i<=5){
    echo  '<div class="box">'.$i.'</div>';
    $i++;
}


for($i=1 ; $i<=20; $i++){
    echo $i ."<br>";
}

$num=1;

for($i=1; $i<=10; $i++){
    echo $num . " x " . $i . " = " . $num*$i . "<br>";
}




?>