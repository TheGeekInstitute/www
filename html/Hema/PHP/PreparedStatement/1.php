<?php
$conn = new mysqli("localhost","root","toor","hema");

$sql="SELECT `user_id`, `fullname`, `username` FROM `signup`";

$stmt = $conn->prepare($sql);
$stmt->bind_result($db_user_id,$db_fullname,$db_username);
$stmt->execute();
$stmt->store_result();
// echo "<pre>";
if($stmt->num_rows>0){
   while($stmt->fetch()){
       echo $db_fullname;

   }
   


}
else{
    echo "No Records Found";
}




$conn->close();

?>