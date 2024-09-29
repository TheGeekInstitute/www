<?php
$name=["Amit","Sumit","Riya","Julie","Geeta","Sonu"];


echo "Hi, " .  $name[1];

echo count($name);

for($i=0 ; $i< count($name) ; $i++){
    echo "Hi, " . $name[$i]. "<br>";
}


$i=0;

while($i<count($name)){
    echo $name[$i] . "<br>";
    $i++;
}

?>