 <?php
$conn = new mysqli("localhost","root","toor","hema");


if(isset($_GET['id']) && !empty($_GET['id'])){
    $id=$_GET['id'];
    $sql="SELECT `user_id`, `fullname`, `username`, `email`, `password` FROM `signup` WHERE `user_id`='$id'";
    
    $query=$conn->query($sql);
    
    if($query->num_rows>0){
        // $data=$query->fetch_all(MYSQLI_ASSOC);
        $data = $query->fetch_assoc();
        var_dump($data);
        echo $data['fullname'];
    
    }
    else{
        echo 'No records Found';
    }

}



?>


<form action="" >
    <input type="number" name="id" id="">
    <input type="submit" value="Show">
</form> 