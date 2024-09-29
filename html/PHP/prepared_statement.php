<?php
$conn= new mysqli("localhost","root","toor","Akash");

// $sql="SELECT `emp_no`, `name`, `gender`, `salary`, `image` FROM `emp`";

$id=$_GET['id'];

$sql="SELECT `emp_no`, `name`, `gender`, `salary`, `image` FROM `emp` WHERE `emp_no`=?";


// $query=$conn->query($sql);

// echo $query->num_rows;

$stmt =$conn->prepare($sql);
$stmt->bind_param("i",$id);
$stmt->bind_result($db_emp_no,$db_name,$db_gender,$db_salary,$db_image);
$stmt->execute();
$stmt->store_result();
if($stmt->num_rows>0){
    $stmt->fetch();

    echo $db_name;
}
else{
    echo "No records Found";
}






?>