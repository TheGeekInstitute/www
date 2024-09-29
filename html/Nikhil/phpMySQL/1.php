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
            <th>Roll no</th>
            <th>Name</th>
            <th>Gender</th>
            <th>Class</th>
        </tr>

<?php
$conn = mysqli_connect("localhost","root","toor","Nikhil");

$sql ="SELECT `roll_no`, `name`, `gender`, `class` FROM `student`;";

$query = mysqli_query($conn,$sql);

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