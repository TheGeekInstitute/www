<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        table{
            margin: 150px auto;
        }
        table,td,th{
            border: 1px solid black;
            border-collapse: collapse;
            padding: 3px;
            text-align: center;
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
$conn = mysqli_connect("localhost","root","toor","Shivank");

$sql="SELECT * FROM `school`";

$query=mysqli_query($conn,$sql);

if(mysqli_num_rows($query)>0){
  $i=1;
    while($data=mysqli_fetch_assoc($query)){

        echo<<<data
        <tr>
            <td>$i</td>
            <td>$data[name]</td>
            <td>$data[gender]</td>
            <td>$data[class]</td>
        </tr>
        data;
        $i++;
    }
}
else{
    echo<<<zero
        <tr>
            <td colspan="4">No Records Found</td>
            
        </tr>
    zero;
}



$sql="INSERT INTO `school`(`name`, `gender`, `class`) VALUES ('Amit','M','XII')";

// mysqli_query($conn,$sql);

?>


    </table>
</body>
</html>