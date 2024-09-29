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
            <th>Emp no</th>
            <th>Name</th>
            <th>salary</th>
            <th>phone</th>
        </tr>

        <?php
        $con= mysqli_connect("localhost","root","toor","Nikhil");
        $sql= "SELECT `emp_no`, `name`, `salary`, `phone` FROM `sheet1`;";

        $quary=  mysqli_query($con,$sql);

        while( $data=mysqli_fetch_assoc($quary)){
            echo '
            
            <tr>
            <td>'.$data['emp_no'].'</td>
            <td>'.$data['name'].'</td>
            <td>'.$data['salary'].'</td>
            <td>'.$data['phone'].'</td>
        </tr>
            ';
        }


        ?>

</table>


</body>
</html>