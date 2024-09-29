
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

$stmt=$conn->prepare($sql);
$stmt->bind_result($db_emp_no,$db_name,$db_gender,$db_salary,$db_image);
$stmt->execute();
$stmt->store_result();








if($stmt->num_rows>0){

    while($stmt->fetch()){
        echo '
        <tr>
            <td>'.$db_emp_no.'</td>
            <td>'.$db_name.'</td>
            <td>'.$db_gender.'</td>
            <td>'.$db_salary.'</td>
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


$stmt->close();


?>
</table>

</bo