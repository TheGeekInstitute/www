<?php
$conn = mysqli_connect("localhost","root","toor","Shivank");
$name=$gender=$class="";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

        table{
            margin-top: 30px;
        }
        table,td,th{
            border: 1px solid black;
            border-collapse: collapse;
            padding: 3px;
            text-align: center;
        }
    </style>
</head>
<body>

<?php



if(isset($_GET['roll_no']) && !empty($_GET['roll_no']) && ctype_digit($_GET['roll_no'])){
    $roll_no=$_GET['roll_no'];
    $sql="SELECT * FROM `school` WHERE `roll_no`='$roll_no'";
    if($query=mysqli_query($conn,$sql)){
        $data=mysqli_fetch_assoc($query);
        $name=$data['name'];
        $gender=$data['gender'];
        $class=$data['class'];
    }
}

?>

    <h1>Form</h1>
    <form method="POST">
     Name : <input type="text" name="name" value="<?php echo $name; ?>"><br><br>
    Gender : Male<input type="radio" name="gender" value="M" <?php echo  ($gender=="M") ? "checked" : ""  ?>>
    Female   <input type="radio" name="gender" value="F" <?php if($gender=="F"){ echo "checked"; } ?> ><br><br>
    Class : <select name="class" >
    <option value="IX" <?php if($class=="IX"){ echo "selected"; } ?>>IX</option>
    <option value="X"  <?php if($class=="X"){ echo "selected"; } ?>>X</option>
    <option value="XI"  <?php if($class=="XI"){ echo "selected"; } ?>>XI</option>
        <option value="XII"  <?php if($class=="XII"){ echo "selected"; } ?>>XII</option></select><br><br>
    <?php
    if(isset($_GET['roll_no'])){
        echo '
        <input type="submit" value="Update" name="update">
        ';
    }
    else{
        echo '
        <input type="submit" value="Insert" name="insert">
        ';
    }
?>
        </form>

<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
    if(isset($_POST['name']) && !empty($_POST['name']) && isset($_POST['gender']) && !empty($_POST['gender']) && isset($_POST['class']) && !empty($_POST['class']) && isset($_POST['insert'])){

        $name=$_POST['name'];
        $gender=$_POST['gender'];
        $class=$_POST['class'];

        $sql="INSERT INTO `school`(`name`, `gender`, `class`) VALUES ('$name','$gender','$class')";

        $query=mysqli_query($conn,$sql);
        if($query){
            echo "Record Inserted";
        }
        else{
            echo "Can not Insert record";
        }

    }
 
}


if($_SERVER['REQUEST_METHOD']=="POST"){
    if(isset($_POST['name']) && !empty($_POST['name']) && isset($_POST['gender']) && !empty($_POST['gender']) && isset($_POST['class']) && !empty($_POST['class']) && isset($_POST['update'])){
        $name=$_POST['name'];
        $gender=$_POST['gender'];
        $class=$_POST['class'];
        $sql="UPDATE `school` SET `name`='$name',`gender`='$gender',`class`='$class' WHERE `roll_no`='$roll_no';";
        $query=mysqli_query($conn,$sql);
        if($query){
            echo "Record Updated";
        }
        else{
            echo "Can not Update record";
        }
    }
}


if(isset($_GET['del']) && !empty($_GET['del']) && ctype_digit($_GET['del'])){
    $roll_no=$_GET['del'];
    $sql="DELETE FROM `school` WHERE `roll_no`='$roll_no'";
    if(mysqli_query($conn,$sql)){
        header("Location:" . $_SERVER['PHP_SELF']);
    }
}

?>
       
        <table>
        <tr>
            <th>Roll No</th>
            <th>Name</th>
            <th>Gender</th>
            <th>Class</th>
            <th>Modify</th>

        </tr>
<?php

$sql="SELECT * FROM `school`";

$query=mysqli_query($conn,$sql);

if(mysqli_num_rows($query)>0){
  $i=1;
    while($data=mysqli_fetch_assoc($query)){

        echo<<<data
        <tr>
            <td>$i</td>
            <td>$data[name]</td>
            <td>$data[gender]</td>
            <td>$data[class]</td>
            <td><a href="$_SERVER[PHP_SELF]?roll_no=$data[roll_no]">Edit</a> / <a href="$_SERVER[PHP_SELF]?del=$data[roll_no]">Delete</a> </td>

        </tr>
        data;
        $i++;
    }
}
else{
    echo<<<zero
        <tr>
            <td colspan="5">No Records Found</td>
            
        </tr>
    zero;
}


$sql="INSERT INTO `school`(`name`, `gender`, `class`) VALUES ('Sumit','M','XI')";

// mysqli_query($conn,$sql);
?>
    </table>
</body>
</html>