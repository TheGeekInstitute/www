<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students Table....</title>
    <style>
        table,tr,th,td{
            border:1px solid black;
            border-collapse: collapse;
            padding: 3px;
        }
        th{
            background-color: red;
        }
    </style>
</head>
<body>
    <h1>Students Table</h1>
    <table>
        <tr>
            <th>Roll_No</th>
            <th>Name</th>
            <th>Class</th>
            <th>Gender</th>
            <th>Stream</th>
        </tr>
<?php

$host="localhost";
$user="root";
$pass="toor";
$db="shivam";
$conn=mysqli_connect($host,$user,$pass,$db);
$sql= "SELECT * FROM `classes`";
$query=mysqli_query($conn,$sql);
while($data=mysqli_fetch_assoc($query)){
    echo'
    <tr>
        <td>'.$data['roll_no'].'</td>
        <td>'.$data['name'].'</td>
        <td>'.$data['class'].'</td>
        <td>'.$data['gender'].'</td>
        <td>'.$data['stream'].'</td>
    </tr>
    
    ';
}
?>
    </table>
    
</body>
</html>