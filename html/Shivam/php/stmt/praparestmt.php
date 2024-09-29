<?php 
$conn=mysqli_connect("localhost","root","toor","study");
$db_roll=$db_name=$db_gender=$db_stream="";
if($_SERVER['REQUEST_METHOD']=="POST"){
    if(!empty($_POST['name'])){
        $name=$_POST['name'];
        if(!empty($_POST['gender'])){
            $gender=$_POST['gender'];
            if(!empty($_POST['stream']) && $_POST['stream']!="Choose"){
                $stream=$_POST['stream'];
                $sql="INSERT INTO `students`(`name`, `gender`, `stream`) VALUES (?,?,?)";
if(isset($_POST['add'])){
    $insert_stmt=mysqli_prepare($conn,$sql);
    mysqli_stmt_bind_param($insert_stmt,"sss",$name,$gender,$stream);
    mysqli_stmt_execute($insert_stmt);
    mysqli_stmt_store_result($insert_stmt);
    if(mysqli_stmt_affected_rows($insert_stmt)==1){
        
        echo'
        <script>
        alert("Student Added");
        window.location.href="1.php";
        </script>';
    }
    else{
        echo'
        <script>
        alert("Can Not Add Student");
        </script>';
    }

    mysqli_stmt_close($insert_stmt);
}

//update
if(isset($_POST['update']) && isset($_POST['roll'])){
    $roll=$_POST['roll'];
  $sql="UPDATE `students` SET `name`=?,`gender`=?,`stream`=? WHERE `roll_no`=?";
  $update_stmt=mysqli_prepare($conn,$sql);
  mysqli_stmt_bind_param($update_stmt,"sssi",$name,$gender,$stream,$roll);
  mysqli_stmt_execute($update_stmt);
  mysqli_stmt_store_result($update_stmt);
  if(mysqli_stmt_num_rows($update_stmt)==1){
    echo'
    <script>
    alert("Student Has been Updated");
    window.location.href="1.php";
    </script>
    ';
  }

}

            }
            else{
                echo'
        <script>
        alert("Please Choose a Stream");
        </script>';
            }
        }
        else{
            echo'
            <script>
            alert("gender not be empty");
            </script>';

        }
    }
    else{
        echo'
        <script>
        alert("Name shodle not be empty");
        </script>';
    }
}

//delete

if(isset($_GET['del']) && !empty($_GET['del']) && ctype_digit($_GET['del'])){
    $roll=$_GET['del'];
    $sql="DELETE FROM `students` WHERE `roll_no`=?";
    $delete_stmt=mysqli_prepare($conn,$sql);
    mysqli_stmt_bind_param($delete_stmt,"i",$roll);
    mysqli_stmt_execute($delete_stmt);
    mysqli_stmt_store_result($delete_stmt);
    if(mysqli_stmt_affected_rows($delete_stmt)==1){
        echo'
        <script>
        alert("Student Deleted");
        window.location.href="1.php";
        </script>';
    }
    else{
        echo'
        <script>
        alert("Can Not Delete Student At This Time");
        window.location.href="1.php";
        </script>';
    }
    mysqli_stmt_close($delete_stmt);
}


if(isset($_GET['edit']) && !empty($_GET['edit']) && ctype_digit($_GET['edit'])){
    $roll=$_GET['edit'];
    $sql="SELECT  `roll_no`, `name`, `gender`, `stream` FROM students WHERE `roll_no`=?";
    $edit_stmt=mysqli_prepare($conn,$sql);
    mysqli_stmt_bind_param($edit_stmt,"i",$roll);
    mysqli_stmt_bind_result($edit_stmt,$db_roll,$db_name,$db_gender,$db_stream);
    mysqli_stmt_execute($edit_stmt);
    mysqli_stmt_store_result($edit_stmt);
    if(mysqli_stmt_num_rows($edit_stmt)==1){
        mysqli_stmt_fetch($edit_stmt);
        
    }
    else{
        echo'
        <script>
        alert(" Student Cant be edited");
        window.location.href="1.php";
        </script>';

    }
    mysqli_stmt_close($edit_stmt);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <input type="hidden" name="roll" value="<?php echo $db_roll; ?>">
        Name : <input type="text" name="name" value="<?php echo $db_name; ?>"><br><br>
        Gender : Male <input type="radio" name="gender" value="Male" <?php if($db_gender=="Male"){ echo "checked"; } ?>>
               Female <input type="radio" name="gender" value="female"  <?php if($db_gender=="Female"){ echo "checked"; } ?> ><br><br>
        Stream : 
        <select name="stream">
            <option value="Choose">Choose</option>
            <option value="Science"  <?php if($db_stream=="Science"){ echo "selected"; } ?>>Science</option>
            <option value="Commerce" <?php if($db_stream=="Commerce"){ echo "selected"; } ?>>Commerce</option>
            <option value="Arts" <?php if($db_stream=="Arts"){ echo "selected"; } ?>>Arts</option>
        </select><br><br>
        <input type="Submit" name="add" >
        <input type="reset">
        <input type="submit" value="Upadte" name="update">
    </form> 

    <br><br><br>
    <table>
        <tr>
            <th>Roll no</th>
            <th>Name</th>
            <th>Gender</th>
            <th>Steam</th>
            <th>Modify</th>
        </tr>

<?php

$sql="SELECT `roll_no`, `name`, `gender`, `stream` FROM `students`";
$display_stmt=mysqli_prepare($conn,$sql);
mysqli_stmt_bind_result($display_stmt,$db_roll,$db_name,$db_gender,$db_stream);
mysqli_stmt_execute($display_stmt);
mysqli_stmt_store_result($display_stmt);
if(mysqli_stmt_num_rows($display_stmt)>0){
    while(mysqli_stmt_fetch($display_stmt)){
        echo<<<print
        <tr>
            <td>$db_roll</td>
            <td>$db_name</td>
            <td>$db_gender</td>
            <td>$db_stream</td>
            <td><a href="1.php?edit=$db_roll">Edit</a> / <a href="1.php?del=$db_roll">Delete</a></td>
        </tr>
        print;
    }
}
else{
    echo '<tr>
    <td colspan="5">No Result Found</td>
    
    <tr>';
}








mysqli_close($conn);
?>



    </table> 
</body>
</html>