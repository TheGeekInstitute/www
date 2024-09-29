<?php
$conn = new mysqli("localhost","root","toor","hema");


if(isset($_GET['id']) && !empty($_GET['id'])){
    $id=$_GET['id'];
    $sql="SELECT  `fullname` FROM `signup` WHERE `user_id`=?";
    $stmt=$conn->prepare($sql);
    $stmt->bind_param("i",$id);
    $stmt->bind_result($db_fullname);
    $stmt->execute();
    $stmt->store_result();

    if($stmt->num_rows>0){
        while($stmt->fetch()){
            echo $db_fullname ;
        }
    }
    else{
    echo "No recored Found";
    }

}



?>


<form action="" >
    <input type="number" name="id" id="">
    <input type="submit" value="Show">
</form> 