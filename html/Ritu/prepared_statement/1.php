<?php
$conn = new mysqli("localhost","root","toor","Ritu");

$sql="SELECT `sr_no`,`poster` FROM `blog` WHERE `sr_no`=?;";
$id=1;
$stmt= $conn->prepare($sql);
$stmt->bind_param("i",$id);
$stmt->bind_result($sr_no,$poster);
$stmt->execute();
while($stmt->fetch()){
    echo $poster;
}




?>