<?php
$msg="";
$conn=mysqli_connect("localhost","root","toor","Karim");
$emp_id=$firstname=$lastname=$gender=$salary="";
$update=false;

if(isset($_GET['edit']) && !empty($_GET['edit'])){
    $id=$_GET['edit'];
    $sql="SELECT `emp_id`, `firstname`, `lastname`, `gender`, `salary` FROM `employee` WHERE `emp_id`='$id'";
    $query=mysqli_query($conn,$sql);
 
    if(mysqli_num_rows($query)==1){
        $data=mysqli_fetch_assoc($query);
        $emp_id=$data['emp_id'];
        $firstname=$data['firstname'];
        $lastname=$data['lastname'];
        $gender=$data['gender'];
        $salary=$data['salary'];

    
        $update=true;
        
    }
    else{
        $msg="No Records Found";
    }
}


if($_SERVER['REQUEST_METHOD']=="POST"){
    if(isset($_POST['firstname']) && !empty($_POST['firstname'])){
        $firstname=$_POST['firstname'];

        if(isset($_POST['lastname']) && !empty($_POST['lastname'])){
            $lastname=$_POST['lastname'];

            if(isset($_POST['gender']) && !empty($_POST['gender'])){
                $gender=$_POST['gender'];

                if(isset($_POST['salary']) && !empty($_POST['salary'])){
                    $salary=$_POST['salary'];

                        if(isset($_POST['save'])){

                            $sql="INSERT INTO `employee`(`firstname`, `lastname`, `gender`, `salary`) VALUES ('$firstname','$lastname','$gender','$salary')";
        
                            $query=mysqli_query($conn,$sql);
                            if($query){
                                $msg="Record Added";
                            }
                            else{
                                echo "Can not Add record At This Time Server Busy";
                            }
                        }
                        else if(isset($_POST['update']) && isset($_POST['emp_id'])){
                            $id=$_POST['emp_id'];
                            $sql="UPDATE `employee` SET `firstname`='$firstname',`lastname`='$lastname',`gender`='$gender',`salary`='$salary' WHERE `emp_id`='$id'";
                            $query=mysqli_query($conn,$sql);
                            if($query){
                                $msg="Record has Been Updated";
                            }
                        }
                        else{
                            $msg="Invalid Request";
                        }
                    

                }
                else{
                    $msg="Please Enter Salary";
                }

            }
            else{
                $msg="Please Choose Gender";
            }

        }
        else{
            $msg="Please Enter Last Name";
        }
    }
    else{
        $msg="Please Enter First Name";
    }
}

if(isset($_GET['delete']) && !empty($_GET['delete'])){
    $id=$_GET['delete'];
    $sql="DELETE FROM `employee` WHERE `emp_id`='$id'";
    $query=mysqli_query($conn,$sql);
    header("location:".$_SERVER['PHP_SELF']);
}



?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form action="" method="post">
        <input type="hidden" name="emp_id" value="<?php echo $emp_id; ?>">
        First Name :
        <input type="text" name="firstname" value="<?php echo $firstname; ?>">
        <br><br>
        Last Name : 
        <input type="text" name="lastname" value="<?php echo $lastname; ?>">
        <br><br>
        Gender : 
        <select name="gender">
            <?php
                if($gender=="Male"){
                    echo<<<data
                    <option value="">Choose</option>
                    <option value="Male" selected>Male</option>
                    <option value="Female">Female</option>
                    <option value="Others">Others</option>
                    data;
                }
                else if($gender=="Female"){
                    echo<<<data
                    <option value="">Choose</option>
                    <option value="Male">Male</option>
                    <option value="Female" selected>Female</option>
                    <option value="Others">Others</option>
                    data;
                }
                else if($gender=="Others"){
                    echo<<<data
                    <option value="">Choose</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Others" selected>Others</option>
                    data;
                }
                else{
                    echo<<<data
                    <option value="">Choose</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Others">Others</option>
                    data;
                }
            ?>
        </select>
        <br><br>
        Salary:
        <input type="number" name="salary" value="<?php echo $salary; ?>">

        <br><br>
        <input type="submit" value="Save" name="save">

                <?php
    if($update){
        echo '
        <input type="submit" value="Update" name="update">
        ';
    }

            ?>

    </form>
<br>
<p><?php echo $msg; ?></p>
<br>


<fieldset>
    <legend>Data</legend>
    <table border="1px">
        <tr>
            <th>Emp No</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Gender</th>
            <th>Salary</th>
            <th>Modify</th>

        </tr>
<?php
$sql="SELECT `emp_id`, `firstname`, `lastname`, `gender`, `salary` FROM `employee`";

$query=mysqli_query($conn,$sql);
if($query){
    if(mysqli_num_rows($query)>0){
        $i=1;
        while($data=mysqli_fetch_assoc($query)){
            echo<<<abcd
            <tr>
                <td>$i</td>
                <td>$data[firstname]</td>
                <td>$data[lastname]</td>
                <td>$data[gender]</td>
                <td>$data[salary]</td>
                <td>
                <a href="?edit=$data[emp_id]">Edit</a> / 
                <a href="?delete=$data[emp_id]">Delete</a> 
                </td>
            </tr> 
            abcd;
            $i++;
        }


    }
    else{
        echo '
        <tr>
            <td colspan="5">No Records Found</td>
        </tr> 
        ';
    }
}


mysqli_close($conn);
?>



 
    </table>
</fieldset>

</body>
</html>