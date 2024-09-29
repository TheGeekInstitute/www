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
    <form action="" method="POST">
        Name : <input type="text" name="name"><br><br>
    
        Gender : Male<input type="radio" name="gender" value="male">
            Female   <input type="radio" name="gender" value="female"><br><br>
        Salary  : <input type="salary" name="salary">
    <br><br>
       <input type="submit" value="Add" name="add">
       <input type="submit" value="Update">
       <input Type="reset"> 
    </form>



    <?php
$conn=mysqli_connect("localhost","root","toor","Ritu");
if(isset($_POST['name'])&&(isset($_POST['gender']))&&(isset($_POST['salary'])) && isset($_POST['add'])){
    $name=$_POST['name'];
    $gender=$_POST['gender'];
    $salary=$_POST['salary'];

    $sql="INSERT INTO `employees` ( `name`, `gender`, `salary`) VALUES ( '$name', '$gender', '$salary')";
    $query=mysqli_query($conn,$sql);
    if($query){
        echo " Students Added ";
    }
}

?>

<table>
<tr>
    <th>E_ID</th>
    <th>Name</th>
    <th>Gender</th>
    <th>Salary</th>
    <th>Modify</th>
</tr>


 <?php
$sql="SELECT * FROM `employees`";
$query=mysqli_query($conn,$sql);
while($data=mysqli_fetch_assoc($query)){
    echo'
    <tr>
        <td>'.$data['e_id'].'</td>
        <td>'.$data['name'].'</td>
        <td>'.$data['gender'].'</td>
        <td>'.$data['salary'].'</td>
        <td><a href="?del='.$data['name'].'">Delete</a></td>
    </tr>';
} 

if(isset($_GET['del'])){
    $name=$_GET['del'];
    $sql="DELETE FROM `employees` WHERE `name`='$name'";
    mysqli_query($conn,$sql);
    header("location:delete.php");
}

?>


</table>