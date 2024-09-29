
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<table border="1px">
    <tr>
        <th>Emp No</th>
        <th>Name</th>
        <th>Gender</th>
        <th>Salary</th>
    </tr>

<?php
$host="localhost";
$username="root";
$password="toor";
$database="Karim";
$conn=mysqli_connect($host,$username,$password,$database);

$sql="SELECT `emp_no`, `name`, `gender`, `salary`, `image` FROM `emp`";

$query=mysqli_query($conn,$sql);

if($query){
if(mysqli_num_rows($query)>0){

    // $data=mysqli_fetch_all($query);
    // $data=mysqli_fetch_assoc($query);
    // $data=mysqli_fetch_assoc($query);

// echo "<pre>";
    // var_dump($data[0][1]);
    // var_dump($data);

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
    

}
else{
echo '
<tr>
    <td colspan="4">No Records Found</td>
</tr>

';
}


}
else{
    echo "Server Busy";
}



?>
</table>

</body>
</html>
