<?php
$host="localhost"; //127.0.0.1
$user="root";
$pass="toor";
$db="hema";

$conn=mysqli_connect($host,$user,$pass,$db);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>table</title>
</head>
<body>

<form action="" method="POST">
    Name : 
    <input type="text" name="name">

    <br><br>

    Gender : 
    <select name="gender" id="">
        <option value="">Choose</option>
        <option value="Male">Male</option>
        <option value="Female">Female</option>
        <option value="Others">Others</option>
    </select>

    <br><br>

    Salary : 
    <input type="number" name="salary">

    <br><br>
    <input type="submit" value="Save">
</form>
<br><br>
<?php
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
                    header("localtion:".$_SERVER['PHP_SELF']);
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
<br><br>

<fieldset>
    <legend>Data</legend>

    <table border="1px" width="50%">
    
    <tr>
        <th>Emp No</th>
        <th>Name</th>
        <th>Gender</th>
        <th>Salary</th>
    </tr>
<?php
$sql="SELECT `emp_no`, `name`, `gender`, `salary` FROM `emp`";
$query=mysqli_query($conn,$sql);
if(mysqli_num_rows($query)>0){
    $i=1;
    // $data = mysqli_fetch_all($query);
    while($data = mysqli_fetch_assoc($query)){
        echo '
        <tr>
            <td>'.$i.'</td>
            <td>'.$data['name'].'</td>
            <td>'.$data['gender'].'</td>
            <td>'.$data['salary'].'</td>
        </tr> 
        
        ';

        $i++;
    }
}
else{
    echo '
    <td colspan="4">No Records Found</td>
    ';
}


mysqli_close($conn);
?>



    </table>
</fieldset>

</body>
</html>