<?php
$conn=mysqli_connect("localhost","root","toor","Akash");
$info="";
$sql="SELECT * FROM `emp`";
$query=mysqli_query($conn,$sql);
if($query){
    while($data=mysqli_fetch_assoc($query)){
        $info .=$data['name'] . " ";
    }
}


echo $info;

?>