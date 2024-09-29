<?php
$conn = mysqli_connect("localhost","root","toor","Ritu");

if(isset($_GET['id'])){
    $id=$_GET['id'];

    $sql="SELECT `name`,`gender`,`salary` FROM `employees` WHERE `e_id`=?";

    $stmt=mysqli_prepare($conn,$sql);
    mysqli_stmt_bind_param($stmt,"i",$id);
    mysqli_stmt_bind_result($stmt,$name,$gender,$salary);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_fetch($stmt);


    echo $name ."<br>";
    echo $gender ."<br>";
    echo $salary ."<br>";
}




?>