<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style>
        table,td,th,tr{
            border: 1px solid black;
            border-collapse: collapse;
            padding: 3px;
            text-align: center;
        }
        th{
            background-color: #ccc;
        }
</style>

</head>
<body>
    
<table>
<tr>
<th>Roll No</th>
<th>Name</th>
<th>Gender</th>
<th>Class</th>
</tr>


<?php
// $host="localhost"; //127.0.0.1
// $user="root";
// $pass="toor";
// $db="school";
// $con = mysqli_connect($host,$user,$pass,$db);

// $sql_query="SELECT * FROM `students`";
// $query=mysqli_query($con,$sql_query);
// if($query){
//     while($data=mysqli_fetch_assoc($query)){
//         echo '
//         <tr>
//         <td>'.$data['roll_no'].'</td>
//         <td>'.$data['name'].'</td>
//         <td>'.$data['gender'].'</td>
//         <td>'.$data['class'].'</td>
//         </tr>
//         ';
//     }
// }
?>

</table>

</body>
</html> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        table,tr,th,td{
            border: 2px solid black;
            border-collapse: collapse;
            background-color:pink;
        }
        th{
            color:blue;
        }
        td{
            color:red;
            text-align: center;
        }
    </style>
</head>
<body>
    
<table>
    <tr>
    <th>Roll no</th>
    <th>Name</th>
    <th>Gender</th>
    <th>Class</th>
    </tr>
<?php

$host="localhost";
$user="root";
$pass="toor";
$db="school";
$con=mysqli_connect($host,$user,$pass,$db);

$sql_query="SELECT * FROM `students`";
$query=mysqli_query($con,$sql_query);
if($query){
    while($data=mysqli_fetch_assoc($query)){
    echo '
    <tr>
        <td>'.$data['roll_no'].'</td>
        <td>'.$data['name'].'</td>
        <td>'.$data['gender'].'</td>
        <td>'.$data['class'].'</td>
    </tr>';
     }
}
?>
</table>
</body>
</html>