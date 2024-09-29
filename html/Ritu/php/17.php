<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>display</title>
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
$conn = mysqli_connect("localhost","root","toor","school");
$sql="SELECT * FROM `students`";
$query=mysqli_query($conn,$sql);
if($query){
    while($data=mysqli_fetch_assoc($query))
    echo '
    <tr>
        <td>'.$data['roll_no'].'</td>
        <td>'.$data['firstname'].'</td>
        <td>'.$data['gender'].'</td>
        <td>'.$data['class'].'</td>
    </tr>
    
    ';
}

?>




    </table>
</body>
</html>