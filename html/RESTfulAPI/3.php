<?php
$conn=mysqli_connect("localhost","root","toor","Dhruv");
header('Content-Type: application/json');
header('Access-Control-Allow-Origin:*');
header('Access-Control-Allow-Methods:POST');
header('Access-Control-Allow-Headers:Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Origin,Access-Control-Allow-Methods,Authorization.X-Requested-With');


$data = json_decode(file_get_contents("php://input"),true);

$name=$data['name'];
$gender=$data['gender'];
$salary=$data['salary'];
$paid_status=$data['paid_status'];


$sql="INSERT INTO `emp`(`name`, `gender`, `salary`, `paid_status`) VALUES ('$name','$gender','$salary','$paid_status')";

$query=mysqli_query($conn,$sql);
    if($query){
        echo json_encode(["message"=>"Record Inserted","status"=>true]);
    }
    else{
        echo json_encode(["message"=>"Can not Insert Record","status"=>false]);

    }
    



?>