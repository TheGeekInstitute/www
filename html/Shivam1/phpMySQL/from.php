<?php

    $conn=mysqli_connect("localhost","root","toor","Shivam");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="form">
        <form action="" method="post">
            <label for="">Name</label>
            <input type="text" name="name">
        
            <br><br>

            <label for="">Gender :</label>
            <select name="gender" id="">
                <option value="">Choose</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Others">Others</option>
            </select>

            <br><br>
            <label for="">Salary</label>
            <input type="number" name="salary">

            <br><br>

            <input type="submit" value="save">
        </form>
    </div>

<?php

$conn=mysqli_connect("localhost","root","toor","Shivam");


if($_SERVER['REQUEST_METHOD']=="POST"){

    if(isset($_POST['name']) && !empty($_POST['name'])){
        $name=$_POST['name'];

        if(isset($_POST['gender']) && !empty($_POST['gender'])){
            $gender=$_POST['gender'];
            
            if(isset($_POST['salary']) && !empty($_POST['salary'])){
                $salary=$_POST['salary'];

                $sql="INSERT INTO `emp`(`name`, `gender`, `salary`) VALUES ('$name','$gender','$salary')";

            $query=mysqli_query($conn,$sql);
            if($query){
            echo "Record Inserted";
        }
        else{
            echo "Can Not Insert Recored At This time";
        }
        
        
            }
        
            else{
            echo "Please Enter Salary";
            }
    
        }
    
        else{
        echo "Please Choose Gender";
        }

    }

    else{
    echo "Please Enter Name";
    }
}
?>


<div class="info">


<table border="1px">
<tr>
    <th>Emp No</th>
    <th>Name</th>
    <th>Gender</th>
    <th>Salary</th>
</tr>


<?php

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
        <td>
        <a href="?id='.$data['emp_no'].'">Delete</a>
        </td>

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



if(isset($_GET['id']) && !empty($_GET['id']) && ctype_digit($_GET['id'])){
$id=$_GET['id'];

$sql="DELETE FROM `emp` WHERE `emp_no`='$id'";
$query=mysqli_query($conn,$sql);
if($query){
   
    echo '
    <script>
        alert("record Deleted");
        window.location.href="'.$_SERVER['PHP_SELF'].'";
    </script>
    
    ';

}

}


?>
</table>

</div>

</body>
</html>
