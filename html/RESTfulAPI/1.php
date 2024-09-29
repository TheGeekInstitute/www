<?php
$conn=mysqli_connect("localhost","root","toor","Dhruv");
header('Content-Type: application/json');
header('Access-Control-Allow-Origin:*');

$sql="SELECT `user_id`, `fullname`, `username`, `email`, `password`, `is_verified` FROM `users`;";
$query=mysqli_query($conn,$sql);
if(mysqli_num_rows($query)>0){
    
echo json_encode(mysqli_fetch_all($query,MYSQLI_ASSOC));
}
else{
    echo json_encode(["message"=>"No Records Found.","status"=>false]);
}


?>