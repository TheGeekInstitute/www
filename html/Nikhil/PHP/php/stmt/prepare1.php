<?php

$conn=mysqli_connect("localhost","root",
"toor","Ritu");
If(isset($_GET['id'])){
    $id=$_GET['id'];
$sql="SELECT `heading`,`post` FROM `blog` WHERE `id`=?";
$stmt=mysqli_prepare($conn,$sql);
mysqli_stmt_bind_param($stmt,"i",$id);
mysqli_stmt_bind_result($stmt,$heading,$post);
mysqli_stmt_execute($stmt);
mysqli_stmt_fetch($stmt);


echo $heading ."<br>";
    echo $post ."<br>";

}


?>