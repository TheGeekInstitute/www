<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP MYSQL</title>
</head>
<body>

<table border="1px">
    <tr>
        <th>Emp No</th>
        <th>Name</th>
        <th>Gender</th>
        <th>Age</th>
        <th>Salary</th>
    </tr>




<?php
$host="localhost"; //127.0.0.1
$user="root";
$pass="toor";
$db="Ankit";

$conn = mysqli_connect($host,$user,$pass,$db);

$sql="SELECT `emp_no`,`name`,`gender`,`age`,`salary` FROM `emp`";
$query=mysqli_query($conn,$sql);
if(mysqli_num_rows($query)>0){
// $data=mysqli_fetch_all($query);
while($data=mysqli_fetch_assoc($query)){
    // echo $data['salary'];

    echo '
    <tr>
        <td>'.$data['emp_no'].'</td>
        <td>'.$data['name'].'</td>
        <td>'.$data['gender'].'</td>
        <td>'.$data['age'].'</td>
        <td>'.$data['salary'].'</td>
    </tr>
    
    ';
}

}
else{
    echo '
    <tr>
        <td colspan="5">No Records Found</td>
    </tr>
    ';
}






mysqli_close($conn);
?>  

</table>

</body>
</html>