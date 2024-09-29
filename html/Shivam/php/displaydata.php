<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display</title>
    <style>
        table,tr,th,td{
            border: 1px solid black;
            border-collapse: collapse;
            padding: 3px;
            text-align: center;
        }
        th{
            background-color: #cccc;
        }
    </style>
</head>
<body>
    <h1>Student Table</h1>
    <table>
        <tr>
            <th>Roll No4444</th>
            <th>Name</th>
            <th>Gender</th>
            <th>Class</th>
        </tr>
<?php
$host="localhost";
$user="root";
$pass="toor";
$db="mydb";
$conn = mysqli_connect($host,$user,$pass,$db);
$sql="SELECT * FROM `students`";
$query=mysqli_query($conn,$sql);
while($data=mysqli_fetch_assoc($query)){
    echo '
    <tr>
        <td>'.$data['roll_no'].'</td>
        <td>'.$data['name'].'</td>
        <td>'.$data['gender'].'</td>
        <td>'.$data['class'].'</td>
    </tr>
    ';
}
mysqli_close($conn);
?>

    </table>
    
</body>
</html>