<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INSERT</title>
    <style>
        table,tr,td.th{
            border: 2px solid black;
            margin: 3px;
            padding: 3px;
            border-collapse: collapse;
        }
        td{
            border: 2px solid black;

        }
        th{
            background-color: blue;
        }
    </style>
</head>
<body>
    <form action="" method="POST">
        
        Name : <input type="text" name="name"><br><br>
        Class : <select name="class" >
            <option value="XI">XI</option>
            <option value="XII">XII</option>
        </select><br><br>
        Gender : Male<input type="radio" name="gender" value="male">
            Female   <input type="radio" name="gender" value="female"><br><br>
        <select name="stream">
            <option value="Science">Science</option>
            <option value="Commerce">Commerce</option>
            <option value="Arts">Arts</option>
        </select><br><br>
       <input type="submit"> 
    </form>
<?php
$conn=mysqli_connect("localhost","root","toor","Ritu");
if(isset($_POST['name'])&&(isset($_POST['class']))&&(isset($_POST['gender']))&&(isset($_POST['stream']))){
    $name=$_POST['name'];
    $class=$_POST['class'];
    $gender=$_POST['gender'];
    $stream=$_POST['stream'];

    $sql="INSERT INTO `classes` (`name`, `class`, `gender`, `stream`) VALUES ('$name', '$class', '$gender', '$stream')";
    $query=mysqli_query($conn,$sql);
    if($query){
        echo " Students Added";
    }
}

?>

<table>
    <tr>
        <th>Name</th>
        <th>Class</th>
        <th>Gender</th>
        <th>Stream</th>
        <th>Modify</th>
    </tr>
<?php
$sql="SELECT * FROM `classes`";
$query=$query=mysqli_query($conn,$sql);
while($data=mysqli_fetch_assoc($query)){
    echo'
    <tr>
        <td>'.$data['name'].'</td>
        <td>'.$data['class'].'</td>
        <td>'.$data['gender'].'</td>
        <td>'.$data['stream'].'</td>
        <td><a href="?del='.$data['name'].'">Delete</a></td>
    </tr>';
}



if(isset($_GET['del'])){
    $name=$_GET['del'];
    $sql="DELETE FROM `classes` WHERE `name`='$name'";
    mysqli_query($conn,$sql);

}




?>


</table>





    </body>
    </html>
