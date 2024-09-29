<?php
$conn=mysqli_connect("localhost","root","toor","Dhruv");
header('Content-Type: application/json');
header('Access-Control-Allow-Origin:*');
header('Access-Control-Allow-Methods:PUT');
header('Access-Control-Allow-Headers:Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Origin,Access-Control-Allow-Methods,Authorization.X-Requested-With');


$data = json_decode(file_get_contents("php://input"),true);
$id=$data['id'];
$name=$data['name'];
$gender=$data['gender'];
$salary=$data['salary'];
$paid_status=$data['paid_status'];

// if(isset($data['name']) && !empty($data['name'])){
//     $sql="UPDATE `emp` SET `name`='$name' WHERE `emp_no`='$emp_no'";
// }

$sql="UPDATE `emp` SET `name`='$name',`gender`='$gender',`salary`='$salary',`paid_status`='$paid_status' WHERE `emp_no`='$id'";






$query=mysqli_query($conn,$sql);
    if($query){
        echo json_encode(["message"=>"Record Update","status"=>true]);
    }
    else{
        echo json_encode(["message"=>"Can not Update Record","status"=>false]);

    }
    



?>