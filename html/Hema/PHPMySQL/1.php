

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP MySQL</title>
</head>
<body>

<table border="1px" width="50%">
    
    <tr>
        <th>Emp No</th>
        <th>Name</th>
        <th>Gender</th>
        <th>Salary</th>
    </tr>
<?php
$host="localhost"; //127.0.0.1
$user="root";
$pass="toor";
$db="hema";

$conn=mysqli_connect($host,$user,$pass,$db);

$sql="SELECT `emp_no`, `name`, `gender`, `salary` FROM `emp`";
$query=mysqli_query($conn,$sql);
if(mysqli_num_rows($query)>0){
    $i=1;
    // $data = mysqli_fetch_all($query);
    while($data = mysqli_fetch_assoc($query)){
        echo '
        <tr>
            <td>'.$i.'</td>
            <td>'.$data['name'].'</td>
            <td>'.$data['gender'].'</td>
            <td>'.$data['salary'].'</td>
        </tr> 
        
        ';

        $i++;
    }
}
else{
    echo '
    <td colspan="4">No Records Found</td>
    ';
}




mysqli_close($conn);
?>

</table>
</body>
</html>