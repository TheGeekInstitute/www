<?php
$conn=mysqli_connect("localhost","root","toor","Dhruv");
header('Content-Type: application/json');
header('Access-Control-Allow-Origin:*');
header('Access-Control-Allow-Methods:DELETE');
header('Access-Control-Allow-Headers:Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Origin,Access-Control-Allow-Methods,Authorization.X-Requested-With');


$data = json_decode(file_get_contents("php://input"),true);
$id=$data['id'];

$sql="DELETE FROM `emp` WHERE `emp_no`='$id'";

$query=mysqli_query($conn,$sql);
    if($query){
        echo json_encode(["message"=>"Record Deleted","status"=>true]);
    }
    else{
        echo json_encode(["message"=>"Can not Delete Record","status"=>false]);

    }
    



?>