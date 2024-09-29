<?php
$conn=mysqli_connect("localhost","root","toor","Ritu");
$db_roll=$db_name=$db_gender=$db_stream="";
if(isset($_GET['del']) && !empty($_GET['del']) && ctype_digit($_GET['del'])){
    $roll=$_GET['del'];
    $sql="DELETE FROM `students` WHERE `roll_no`=?";
    $del_stmt=mysqli_prepare($conn,$sql);
    mysqli_stmt_bind_param($del_stmt,"i",$roll);
    mysqli_stmt_execute($del_stmt);
    mysqli_stmt_store_result($del_stmt);
    if(mysqli_stmt_affected_rows($del_stmt)>0){
        echo '
        <script>
          alert("Student has been deleted");
        </script>
        ';
    }
}

if(isset($_GET['edit'])&& isset($_GET['edit']) && ctype_digit($_GET['edit'])){
$roll=$_GET['edit'];
    $sql="SELECT `roll_no`,`name`,`gender`,`stream` FROM `students` WHERE `roll_no`=?";
    $show_stmt=mysqli_prepare($conn,$sql);
    mysqli_stmt_bind_param($show_stmt,"i",$roll);
    mysqli_stmt_bind_result($show_stmt,$db_roll,$db_name,$db_gender,$db_stream);
    mysqli_stmt_execute($show_stmt);
    mysqli_stmt_store_result($show_stmt);
    if(mysqli_stmt_num_rows($show_stmt)==1){
        mysqli_stmt_fetch($show_stmt);
    }
    else{
        echo '
        <script>
            alert("Invalid Roll No");

        </script>
        ';
    }
mysqli_stmt_close($show_stmt);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <style>
        table,tr,th,td{
            border: 2px solid black ;
            border-collapse:collapse;
        }
    </style>
</head>
<body>
<h1>Form...</h1>
    <fieldset>
        <legend>form....</legend>
    
<form method="POST">
    <input type="hidden" name="roll" value="<?php echo $db_roll; ?>">
    Name:<input type="text" name="name" placeholder="Please enter your name" value="<?php echo "$db_name" ?>"> <br><br>
    Gender: Male<input type="radio" name="gender" value="Male" <?php if($db_gender=="Male"){echo "checked" ;} ?> > Female<input type="radio" name="gender" value="Female"  <?php if($db_gender=="Female"){echo "checked" ;} ?> > <br><br>
    Stream: 
    <select name="stream" >
        <option value="Choose">Choose</option>
        <option value="Science" <?php if($db_stream="Science"){echo "selected";} ?>>Science</option>
        <option value="Commerce"<?php if($db_stream="Commerce"){echo "selected";} ?>>Commerce</option>
        <option value="Arts"<?php if($db_stream="Arts"){echo "selected";} ?>>Arts</option>
    </select>
    <br><br>
<input type="submit" value="Add Student" name="add">
<input type="submit" value="Update" name="update">
</form>
</fieldset>
<br><br><br>
<table>
<tr>
          <th>Roll no</th>
          <th>Name</th>
          <th>Gender</th>
          <th>Stream</th>
          <th>Modify</th>
       </tr>

 

<?php

$sql="SELECT * FROM `students`";
$display_stmt=mysqli_prepare($conn,$sql);
mysqli_stmt_bind_result($display_stmt,$db_roll,$db_name,$db_gender,$db_stream);
mysqli_stmt_execute($display_stmt);
mysqli_stmt_store_result($display_stmt);
if(mysqli_stmt_num_rows($display_stmt)>0){
    while(mysqli_stmt_fetch($display_stmt)){
        echo <<<print
        <tr>
          <td>$db_roll</td>
          <td>$db_name</td>
          <td>$db_gender</td>
          <td>$db_stream</td>
          <td><a href="./form1.php?edit=$db_roll">Edit</a> / <a href="./form1.php?del=$db_roll">Delete</a></td>
       </tr>
       print;
    }
}
mysqli_stmt_close($display_stmt);
?>
</table>

</body>
</html>

<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
    if(!empty($_POST['name'])){
        $name=$_POST['name'];
        if(!empty($_POST['gender'])){
             $gender=$_POST['gender'];
        
            if(!empty($_POST['stream']) && $_POST['stream']!='Choose'){
                $stream=$_POST['stream'];
                // add post start
                if(isset($_POST['add'])){
                    $sql="INSERT INTO `students`(`name`, `gender`, `stream`) VALUES (?,?,?)";
                    $stmt=mysqli_prepare($conn,$sql);
                    mysqli_stmt_bind_param($stmt,"sss",$name,$gender,$stream);
                    mysqli_stmt_execute($stmt);
                    mysqli_stmt_store_result($stmt);
                    if(mysqli_stmt_affected_rows($stmt)==1){
                        echo "Student has Been Added To Database";
                    }
                    
                    mysqli_stmt_close($stmt);
                }
                // add post end


                // update post start
                 if(isset($_POST['update']) && isset($_POST['roll']) && !empty($_POST['roll'])){
                  $roll=$_POST['roll'];
                  $sql="UPDATE `students` SET `name`=?,`gender`=?,`stream`=? WHERE `roll_no`=?";
                $update_stmt=mysqli_prepare($conn,$sql);
                mysqli_stmt_bind_param($update_stmt,"sssi",$name,$gender,$stream,$roll);
                mysqli_stmt_execute($update_stmt);
                mysqli_stmt_store_result($update_stmt);
                if(mysqli_stmt_affected_rows($update_stmt)==1){
                    echo '
                    <script>
                        alert("Student Updated");
                        window.location.href="form1.php";
                    </script>
                    ';
                }
                else{
                    echo '
                    <script>
                        alert("Can not Update Student");
                    </script>
                    ';
                }

                mysqli_stmt_close($update_stmt);
                }
                
                // update post end



            }
            else{
                echo "Please Choose a Stream";
            }
        }
        else{
            echo "Gender Should Not be Empty";
        }
    }
    else{
        echo "Name should not be empty";
    }
}
mysqli_close($conn);
?>