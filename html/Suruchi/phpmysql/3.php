 <?php

 $smg="";

 $conn=mysqli_connect("localhost","root","toor","Suruchi");
 if($_SERVER['REQUEST_METHOD']=="POST"){

    if(isset($_POST['name']) && !empty($_POST['name'])){
        $name=$_POST['name'];

        if(isset($_POST['gender']) && !empty($_POST['gender'])){
            $name=$_POST['gender'];

            if(isset($_POST['salary']) && !empty($_POST['salary'])){
                $name=$_POST['salary'];

                $sql="INSERT INTO `emp` (`name`,`gender`,`salary`) VALUES (`$name`,`$gender`,`$salary`)";

                $quarry=mysqli_query($conn,$sql);
                if($quarry){
                    $msg="Record Inserted";
                }
                else{
                    echo "can not insert record";
                }

            }
            else{
                $msg="please enter salary";
            }

        }
        else{
            $smg="please select a gender";
        }


    }
    else{
        $smg="please enter name";
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
        <label>Name :</label>
        <input type="text" name="name">

        <br><br>
        <label>Gender :</label>
        <select name="gender">
            <option value="">Choose</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="Other">Other</option>
        </select>
        <br><br>
        <label for="">Salary</label>
        <input type="text" name="salary">
        <br><br>

        <input type="submit" value="Save">
    </form>
    <br><br>


    <br><br><br><br>

    <table boder="1px">
    <tr>
            <th>Emp No</th>
            <th>Name</th>
            <th>Gender</th>
            <th>Salary</th>
        </tr>

        <?php
        $sql="SELECT * FORM `emp`";
        $quarry=mysqli_query($conn,$sql);

        if(mysqli_num_rows($quarry)>0){
            $i=1;
            while($data=mysqli_fetch_assoc($quarry)){
                echo '
                <tr>
                <td>'.$data['name'].'</td>
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
            <td colspan="5">NO Records Found</td>
            <tr>
            ';
        }

        //Delete code

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