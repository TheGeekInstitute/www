<?php
session_start();
$conn=mysqli_connect("localhost","root","toor","Akash");
$info="";
$sql="SELECT * FROM `emp`";
$query=mysqli_query($conn,$sql);
echo mysqli_num_rows($query);
?>