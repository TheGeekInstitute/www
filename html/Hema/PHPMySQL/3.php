<?php
$host="localhost"; //127.0.0.1
$user="root";
$pass="toor";
$db="hema";

$conn=mysqli_connect($host,$user,$pass,$db);

$emp_no=$name=$gender=$salary="";






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
    <input type="text" name="name" >

    <br><br>

    Gender : 
    <select name="gender" id="">
        <option value="">Choose</option>
        <option value="Male">Male</option>
        <option value="Female" >Female</option>
        <option value="Others" >Others</option>
    </select>

    

    <br><br>

    Salary : 
    <input type="number" name="salary">
    <br><br>
<input type="submit" value="save">
    <br><br>
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
                    echo "Record Inserted";
                }
                else{
                    echo "can not insert record";
                }
                

        
            }
            else{
                echo "Please Enter salary";
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
        <th>Modify</th>

    </tr>

    <?php
    $sql="SELECT `emp_no`, `name`, `gender`, `salary` FROM `emp`";
    $query=mysqli_query($conn,$sql);
    if(mysqli_num_rows($query)>0){
        while($data=mysqli_fetch_assoc($query)){
            echo<<<abcd
                <tr>
                    <td>$data[emp_no]</td>
                    <td>$data[name]</td>
                    <td>$data[gender]</td>
                    <td>$data[salary]</td>
                    <td><a href="?edit=$data[emp_no]">Edit</a> / <a href="?delete=$data[emp_no]">Delete</a></td>
                </tr>
            abcd;
        }

    }
    else{
        echo '
        <tr>
        <td colspan="5">No Records Found</td>
        </tr>
        ';
    }



//delete// prosece
    if(isset($_GET['delete']) && !empty($_GET['delete']) && ctype_digit($_GET['delete'])){
        $id=$_GET['delete'];
        $sql="DELETE FROM `emp` WHERE `emp_no`='$id'";
        $query=mysqli_query($conn,$sql);
        if($query){
            header("location:".$_SERVER['PHP_SELF']);
        }
    }




    ?>





    </table>
</fieldset>

</body>
</html>