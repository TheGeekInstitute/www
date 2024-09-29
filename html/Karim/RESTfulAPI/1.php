<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin:*');
$conn=mysqli_connect("localhost","root","toor","Karim");

$sql="SELECT `emp_no`, `name`, `gender`, `salary`, `image` FROM `emp`";


$query=mysqli_query($conn,$sql);
if(mysqli_num_rows($query)>0){
    
echo json_encode(mysqli_fetch_all($query,MYSQLI_ASSOC));
}
else{
    echo json_encode(["message"=>"No Records Found.","status"=>false]);
}

?>