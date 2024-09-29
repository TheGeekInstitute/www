<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Employee Table</h1>
    <table>
        <tr>
            <th>Emp no</th>
            <th>Name</th>
            <th>Gender</th>
            <th>Salary</th>
        </tr>
        <?php
$conn = mysqli_connect("localhost","root","toor",'Suruchi');

$sql="SELECT `emp_no`, `name`, `gender`, `salary` FROM `emp`";

$query= mysqli_query($conn,$sql);

// echo mysqli_num_rows($query);
while($data=mysqli_fetch_assoc($query)){
    
    echo '
    <tr>
        <td>'.$data['emp_no'].'</td>
        <td>'.$data['name'].'</td>
        <td>'.$data['gender'].'</td>
        <td>'.$data['salary'].'</td>
    </tr>
    
    ';


}



mysqli_close($conn);



?>


        
    </table>
</body>
</html>