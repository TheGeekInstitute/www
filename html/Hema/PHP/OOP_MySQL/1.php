<?php
$conn = new mysqli("localhost","root","toor","hema");

$sql="SELECT `user_id`, `fullname`, `username`, `email`, `password` FROM `signup`";

$query=$conn->query($sql);

if($query->num_rows>0){
    // $data=$query->fetch_all(MYSQLI_ASSOC);
    while($data = $query->fetch_assoc()){
        echo "<pre>";
        var_dump($data) ;

    }

}
else{
    echo 'No records Found';
}


$conn->close();

?>