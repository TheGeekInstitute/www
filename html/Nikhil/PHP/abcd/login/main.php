<?php
session_start();
$conn=mysqli_connect("localhost","root","toor","Ritu");
if(isset($_SESSION['login']) && isset($_SESSION['name'])){
    if($_SESSION['login']!=true){
        header("location:login.php");
    }
}else{
    header("location:login.php");

}

$name=$gender=$salary=$eid="";
if(isset($_GET['edit']) && ctype_digit($_GET['edit'])){
    $e_id=$_GET['edit'];
    $sql="SELECT * FROM `employees` WHERE `e_id`='$e_id'";
    $query=mysqli_query($conn,$sql);
    if($query){
        $data=mysqli_fetch_assoc($query);
        $eid=$data['e_id'];
        $name=$data['name'];
        $gender=$data['gender'];
        $salary=$data['salary'];
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INSERT</title>
    <style>
        table,tr,td,th{
            border:2px solid black;
            border-collapse:collapse;
        }
        table,tr,td{
            border:2px solid black;
        }
    </style>
</head>
<body>
   <span>Hi, <?php echo $_SESSION['name'] ;?></span> <a href="./logout.php">Logout</a>
    <br><br>
    <form action="" method="POST">
        <input type="hidden" name="eid" value="<?php echo $eid ;?>">

        Name : <input type="text" name="name" value="<?php echo $name; ?>"><br><br>
    
        Gender : Male<input type="radio" name="gender" value="male" <?php if($gender=="male"){ echo "checked";} ?>>
            Female   <input type="radio" name="gender" value="female" <?php if($gender=="female"){ echo "checked";} ?>><br><br>
        Salary  : <input type="salary" name="salary" value="<?php echo $salary; ?>">
    <br><br>
       <input type="submit" value="Add" name="add">
       <input type="submit" value="Update" name="update">
       <input Type="reset"> 
    </form>



    <?php
if(isset($_POST['name'])&&(isset($_POST['gender']))&&(isset($_POST['salary'])) && isset($_POST['add'])){
    $name=$_POST['name'];
    $gender=$_POST['gender'];
    $salary=$_POST['salary'];

    $sql="INSERT INTO `employees` ( `name`, `gender`, `salary`) VALUES ( '$name', '$gender', '$salary')";
    $query=mysqli_query($conn,$sql);
    if($query){
        echo " Employees Added ";
    }
}

?>
<br><br>
<table>
<tr>
    <th>E_ID</th>
    <th>Name</th>
    <th>Gender</th>
    <th>Salary</th>
    <th>Modify</th>
</tr>


 <?php
 $i=1;
$sql="SELECT * FROM `employees`";
$query=mysqli_query($conn,$sql);
while($data=mysqli_fetch_assoc($query)){
    echo'
    <tr>
        <td>'.$i.'</td>
        <td>'.$data['name'].'</td>
        <td>'.$data['gender'].'</td>
        <td>'.$data['salary'].'</td>
        <td><a href="?edit='.$data['e_id'].'">Edit</a> / <a href="?del='.$data['e_id'].'">Delete</a></td>
    </tr>';
    $i++;
} 

if(isset($_GET['del'])){
    $eid=$_GET['del'];
    $sql="DELETE FROM `employees` WHERE `e_id`='$eid'";
    mysqli_query($conn,$sql);
    header("location:main.php");
}


if(isset($_POST['update']) && isset($_POST['name']) && isset($_POST['gender']) && isset($_POST['salary']) && isset($_POST['eid'])){
    $name=$_POST['name'];
    $gender=$_POST['gender'];
    $salary=$_POST['salary'];
$sql="UPDATE `employees` SET `name`='$name', `gender`='$gender', `salary`='$salary' WHERE `e_id`='$e_id'";
mysqli_query($conn,$sql);
header("location:main.php");

}


?>


</table>