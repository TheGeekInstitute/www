<table border="1px">
    <tr>
        <th>Emp No</th>
        <th>Name</th>
        <th>Gender</th>
        <th>Salary</th>
    </tr>


<?php
$conn=mysqli_connect("localhost","root","toor","Akash");

$sql="SELECT `emp_no`, `name`, `gender`, `salary` FROM `emp`";


$query=mysqli_query($conn,$sql);

if($query){
    if(mysqli_num_rows($query)>0){
        while($data=mysqli_fetch_assoc($query)){
            // echo $data['name'];

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
        echo "No records Found";
    }
}


?>
</table>