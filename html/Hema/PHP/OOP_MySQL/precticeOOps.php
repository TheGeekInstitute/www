<?php
$conn = new mysqli("localhost","root","toor","hemadeta");


if(isset($_GET['id']) && !empty($_GET['id'])){
    $id=$_GET['id'];
 
    $sql="SELECT `username`, `fullname`, `password`, `email` FROM `crudtable` WHERE `username` ='$id'";

    $query=$conn->query($sql);

    if($query->num_rows>0){
        // $data=$query->fetch_all(MYSQLI_ASSOC);
        $data = $query->fetch_assoc();

        var_dump($data);

        echo $data['Full Name'];
    }
    else{
        echo "record not found";
    }
}

?>

<form action="">
    <input type="text" name="id" id="">
    <input type="submit" value="show">
</form>