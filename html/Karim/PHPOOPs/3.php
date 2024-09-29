
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
$conn = new mysqli($host,$username,$password,$database);

$sql="SELECT `emp_no`, `name`, `gender`, `salary`, `image` FROM `emp`";

$query = $conn->query($sql);


echo "<pre>";
// var_dump($query->fetch_all());
// var_dump($query->fetch_assoc());




if($query){
if($query->num_rows>0){

    while($data=$query->fetch_assoc()){
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

</bo