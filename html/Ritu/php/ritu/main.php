<?php
session_start();
$conn=mysqli_connect("localhost","root","toor","Ritu");
if(isset($_SESSION ['login']) && isset($_SESSION['name'])){
    if($_SESSION['login']!=true){
        header("location:login.php");
    }
}
else{
    header("location:login.php");
}

$name=$gender=$salary=$e_id="";
if(isset($_GET['edit']) && ctype_digit($_GET['edit'])){
    $e_id=$_GET['edit'];
    $sql="SELECT * FROM `employees` WHERE `e_id`='$e_id'";
    $query=mysqli_query($conn,$sql);
    if($query){
        $data=mysqli_fetch_assoc($query);
        $e_id=$data['e_id'];
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
    <span> Hi, <?php echo $_SESSION['name'] ?></span> <a href="./logout.php">Logout</a>
    <br><br>
    <form action="" method="POST">
        <input type="hidden" name="e_id" value="<?php echo $e_id; ?>">
        Name : <input type="text" placeholder="Please enter employee name" name="name" value="<?php echo $name ;?>"><br><br>
    
        Gender : Male<input type="radio" name="gender" value="male"<?php
        if($gender=="male"){
            echo "checked";
        } ?>>
            Female   <input type="radio" name="gender" value="female"<?php
        if($gender=="female"){
            echo "checked";
        } ?>><br><br>
        Salary  : <input type="salary" placeholder="Please enter employee salary" name="salary" value="<?php echo $salary ;?>">
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
<br>

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
        <td><a href="?edit='.$data['e_id'].'">Edit</a> /
        <a href="?del='.$data['e_id'].'">Delete</a></td>
    </tr>';
    $i++;
} 

if(isset($_GET['del'])){
    $e_id=$_GET['del'];
    $sql="DELETE FROM `employees` WHERE `name`='$e_id'";
    mysqli_query($conn,$sql);
    header("location:main.php");
}
if(isset($_POST['update']) && isset($_POST['name']) && isset($_POST['gender']) && isset($_POST['salary']) && isset($_POST['e_id'])){
    $name=$_POST['name'];
    $gender=$_POST['gender'];
    $salary=$_POST['salary'];
    $sql="UPDATE `employees` SET `name`='$name',`gender`='$gender',`salary`='$salary' WHERE `e_id`='$e_id'";
    mysqli_query($conn,$sql);
    header("location:main.php");


}
?>


</table>