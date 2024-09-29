<table border="10px">
    <tr>
        <th>Emp No</th>
        <th>Name</th>
        <th>Gender</th>
        <th>Salary</th>
    </tr>


<?php
$conn=mysqli_connect("localhost","root","toor","Dhruv");

$sql="SELECT `emp_no`, `name`, `gender`, `salary`, `paid_status` FROM `emp`";

$join=mysqli_query($conn,$sql);

if($join){
    if(mysqli_num_rows($join)>0){ 
        while($data=mysqli_fetch_assoc($join)){

                      
            echo<<<hellow
            <tr>
                <td>$data[emp_no]</td>
                <td>$data[name]</td>
                <td>$data[gender]</td>
                <td>$data[salary]</td>
            </tr>
            hellow;

        }
    

    }
}
    else{
        echo 'no data found';
    }
// $query=mysqli_query($conn,$sql);

// echo "$query";
?>