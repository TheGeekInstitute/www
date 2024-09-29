<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student table</title>
    <style>
    table th,td{
           border: 2px solid black; 
           border-collapse:collapse;
           padding:3px;
        }
        h1{

        }
    </style>
</head>
<body>
    <h1>Students Data...</h1>
    <table>
        <tr>
            <th>Roll No</th>
            <th>Name</th>
            <th>Class</th>
            <th>Gender</th>
        </tr>
<?php
$conn=mysqli_connect("localhost","root","toor","school");
$sql="SELECT * FROM `students`";
$query=mysqli_query($conn,$sql);
if($query){
    while($data=mysqli_fetch_assoc($query))
    echo'
    <tr>
    <td>'.$data['roll_no'].'</td>
    <td>'.$data['firstname'].'</td>
    <td>'.$data['class'].'</td>
    <td>'.$data['gender'].'</td>
    </tr>
    ';
}




?>
        
    </table>
    
</body>
</html>