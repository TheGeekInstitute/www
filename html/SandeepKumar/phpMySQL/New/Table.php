<?php
$msg="";
$name=$gender=$salary=$emp_no="";

$conn=mysqli_connect("localhost","root","toor","SANDEEP");

if(isset($_GET['edit'])){
    $id=$_GET['edit'];
    
    
    $sql="SELECT * FROM `emp` WHERE `emp_no`='$id'";


    $query=mysqli_query($conn,$sql);
    $data=mysqli_fetch_assoc($query);

   
    $name=$data['fullname'];
    $emp_no=$data['emp_no'];
    $gender=$data['gender'];
    $salary=$data['salary'];

   
    
   
}


if($_SERVER['REQUEST_METHOD']=="POST"){
 

    if(isset($_POST['save'])){
        if(isset($_POST['fullname']) && !empty($_POST['fullname'])){
            
            $name=$_POST['fullname'];

    
            if(isset($_POST['gender']) && !empty($_POST['gender'])){
                $gender=$_POST['gender'];


    
                if(isset($_POST['salary']) && !empty($_POST['salary'])){
                    $salary=$_POST['salary'];


    
                    $sql="INSERT INTO `emp`(`fullname`, `gender`, `salary`) VALUES ('$name','$gender','$salary')";

                    $query=mysqli_query($conn,$sql);

                    if($query){
                        $msg="Record Inserted";
                    }


                    else{
                        echo "Can not insert Record";
                    }
      
                    
                }
                else{
                    $msg="Please Enter Salary";
                }
    
    
            }
            else{
                $msg="Please Select a Gender";
            }
    
    
        }
        else{
            $msg="Please Enter FullName";
        }
    }


    if(isset($_POST['update']) && isset($_POST['id'])){
        if(isset($_POST['fullname']) && !empty($_POST['fullname'])){
            $name=$_POST['fullname'];


    
            if(isset($_POST['gender']) && !empty($_POST['gender'])){
                $gender=$_POST['gender'];



    
                if(isset($_POST['salary']) && !empty($_POST['salary'])){
                    $salary=$_POST['salary'];

                    $id=$_POST['id'];
                    
                    $sql="UPDATE `emp` SET `fullname`='$name',`gender`='$gender',`salary`='$salary' WHERE `emp_no`='$id'";

                    $query=mysqli_query($conn,$sql);
                    if($query){
                        $msg="Record Updated";
                    }

    
    
    
                }
                else{
                    $msg="Please Enter Salary";
                }
    
    
            }
            else{
                $msg="Please Select a Gender";
            }
    
    
        }
        else{
            $msg="Please Enter FullName";
        }
    }

}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form method="POST">
        <input type="hidden" name="id" value="<?php echo $emp_no; ?>">
        <label>FullName :</label>
        <input type="text" name="fullname" value="<?php echo $name; ?>">

        <br><br>
        <label>Gender :</label>
        <select name="gender">
            <option value="">Choose</option>
            <?php
                if($gender=="Male"){
                    echo '
                    <option value="Male" selected>Male</option>
                    <option value="Female" >Female</option>
                    <option value="Other">Other</option>
                    ';
                }
                else if($gender=="Female"){
                    echo '
                    <option value="Other" >Male</option>
                    <option value="Female" selected>Female</option>
                    <option value="Other">Other</option>
                    ';

                }

                else if($gender=="Other"){
                    echo '
                    <option value="Other" selecetd>Other</option>
                    <option value="Male" >Male</option>
                    <option value="Female" >Female</option> ';
                }
                else{
            echo '
                   <option value="Other" >Male</option>
                  <option value="Other" >Female</option>
                  <option value="Other">Other</option>';
                }
            ?>
        </select>


        <br><br>
        <label for="">Salary</label>
        <input type="text" name="salary"  value="<?php echo $salary; ?>">
        <br><br>

        <?php
        if(isset($_GET['edit'])){
            echo '
            <input type="submit" value="Update" name="update">
            ';
        }
        else{
            echo '
            <input type="submit" value="Save" name="save">
            ';
        }


        ?>
    </form>

    <br><br>

    <?php
    echo $msg;
    ?>
    

    <br><br><br><br>

    <table border="1px">
        <tr>
            <th>Emp No</th>
            <th>FullName</th>
            <th>Gender</th>
            <th>Salary</th>
            <th>Modify</th>

        </tr>

        <?php
        $sql="SELECT * FROM `emp`";

        $query=mysqli_query($conn,$sql);

        if(mysqli_num_rows($query)>0){
            $i=1;
            while($data=mysqli_fetch_assoc($query)){
                echo '
                <tr>
                    <td>'.$i.'</td>
                    <td>'.$data['fullname'].'</td>
                    <td>'.$data['gender'].'</td>
                    <td>'.$data['salary'].'</td>
                    <td><a href="?edit='.$data['emp_no'].'">edit</a> / <a href="?delete='.$data['emp_no'].'">delete</a></td>
                </tr>
                ';
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


        if(isset($_GET['delete']) && !empty($_GET['delete'])){
            $id=$_GET['delete'];
            $sql="DELETE FROM `emp` WHERE `emp_no`='$id'";
            $query=mysqli_query($conn,$sql);
            if($query){
                header('location:' . $_SERVER['PHP_SELF']);
            }
        }
        ?>


    </table>
    
</body>
</html>