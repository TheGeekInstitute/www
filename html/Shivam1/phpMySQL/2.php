<form action="" method="GET">
    <input type="number" name="id">
    <input type="submit" value="Show">
</form>


<br><br><br>


<table border="1px">
    <tr>
        <th>Emp No</th>
        <th>Name</th>
        <th>Gender</th>
        <th>Salary</th>
    </tr>


<?php
$conn=mysqli_connect("localhost","root","toor","Akash");


if(isset($_GET['id']) && !empty($_GET['id'])){
$sql="SELECT `emp_no`, `name`, `gender`, `salary` FROM `emp` WHERE `emp_no`='$_GET[id]'";

}else{
    $sql="SELECT `emp_no`, `name`, `gender`, `salary` FROM `emp`";
}




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
        echo '
        <tr>
            <td colspan="4">No records Found</td>
        </tr>
            
            ';
    }
}



?>
</table>