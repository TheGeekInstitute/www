<?php
$msg="";
$host="localhost";
$username="root";
$password="toor";
$database="Karim";
$conn= new mysqli($host,$username,$password,$database);
$emp_id=$firstname=$lastname=$gender=$salary="";
$update=false;
// $query = $conn->query($sql);

if(isset($_GET['edit']) && !empty($_GET['edit'])){
    $id=$_GET['edit'];
    $sql="SELECT `emp_id`, `firstname`, `lastname`, `gender`, `salary` FROM `employee` WHERE `emp_id`=?";
    
    $edit_stmt=$conn->prepare($sql);
    $edit_stmt->bind_param("i",$id);
    $edit_stmt->bind_result($emp_id,$firstname,$lastname,$gender,$salary);
    $edit_stmt->execute();
    $edit_stmt->store_result();
    if($edit_stmt->num_rows==1){
        $edit_stmt->fetch();
        $update=true;

    }
    else{
        $msg="No Records Found";
    }

 $edit_stmt->close();
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

                            $sql="INSERT INTO `employee`(`firstname`, `lastname`, `gender`, `salary`) VALUES (?,?,?,?)";
                            $insert_stmt=$conn->prepare($sql);
                            $insert_stmt->bind_param("ssss",$firstname,$lastname,$gender,$salary);
                            $insert_stmt->execute();
                            $insert_stmt->store_result();
                            if($insert_stmt->affected_rows==1){
                                echo "Record Inserted";
                            }
                            else{
                                echo "can not Insert Record";
                            }
                            $insert_stmt->close();
                     
                        }
                        else if(isset($_POST['update']) && isset($_POST['emp_id'])){
                            $id=$_POST['emp_id'];
                            $sql="UPDATE `employee` SET `firstname`=?,`lastname`=?,`gender`=?,`salary`=? WHERE `emp_id`=?";
                            
                            $update_stmt=$conn->prepare($sql);
                            $update_stmt->bind_param("ssssi",$firstname,$lastname,$gender,$salary,$id);
                            $update_stmt->execute();
                            $update_stmt->store_result();
                            if($update_stmt->affected_rows==1){
                                echo "Record Updated";
                            }
                            else{
                                echo "can not Update record At This Time";
                            }

                            $update_stmt->close();

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
    $sql="DELETE FROM `employee` WHERE `emp_id`=?";
    $delete_stmt=$conn->prepare($sql);
    $delete_stmt->bind_param("i",$id);
    $delete_stmt->execute();
    $delete_stmt->store_result();
    if($delete_stmt->affected_rows==1){
        header("location:".$_SERVER['PHP_SELF']);
    }
    else{
        echo "Can not Delete record At This Time";
    }

    $delete_stmt->close();
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
$show_stmt=$conn->prepare($sql);
$show_stmt->bind_result($db_emp_id,$db_firstname,$db_lastname,$db_gender,$db_salary);
$show_stmt->execute();
$show_stmt->store_result();
// var_dump($show_stmt);








    if($show_stmt->num_rows>0){
        $i=1;
        while($show_stmt->fetch()){
            echo<<<abcd
            <tr>
                <td>$i</td>
                <td>$db_firstname</td>
                <td>$db_lastname</td>
                <td>$db_gender</td>
                <td>$db_salary</td>
                <td>
                <a href="?edit=$db_emp_id">Edit</a> / 
                <a href="?delete=$db_emp_id">Delete</a> 
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


$show_stmt->close();
$conn->close();
?>



 
    </table>
</fieldset>

</body>
</html>