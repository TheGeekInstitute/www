<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table</title>
</head>
<body>
    
    <table border="1px">
        <tr>
            <th>Roll No</th>
            <th>Name</th>
            <th>Gender</th>
            <th>Class</th>
        </tr>
<?php
$host="localhost";
$user="root";
$pass="toor";
$db="ritu";

$conn=mysqli_connect($host,$user,$pass,$db);

$sql = "SELECT * FROM `students`;";
$query= mysqli_query($conn,$sql);
if($query){
    $num_row = mysqli_num_rows($query);
    if($num_row>0){
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
      

    }
    else{
        echo "No Data Found";
    }
}


?>


    </table>
</body>
</html>