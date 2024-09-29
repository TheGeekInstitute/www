<?php
$conn=mysqli_connect("localhost","root","toor","school");
if($_SERVER['REQUEST_METHOD']=="POST")
{
    if(!empty($_POST['name'])){
        $name=$_POST['name'];
        if(!empty($_POST['gender'])){
            $gender=$_POST['gender'];
            if(!empty($_POST['class'])){
                $class=$_POST['class'];
                if(isset($_POST['add'])){
                    $sql="INSERT INTO `students`(`name`, `gender`, `class`) VALUES ('$name','$gender','$class')";
                    $query=mysqli_query($conn,$sql);
                    if($query){
                        echo '
                        <script>
                            alert("Student Added ! ");
                        </script>
                        ';
                    }
                }

                if(isset($_POST['update'])){
                    echo "Udpdate";
                }
            }
            else{
                echo '
                <script>
                    alert("Please Select a Class ! ");
                </script>
                ';
            }
        }
        else{
            echo '
            <script>
                alert("Please Choose a gender ! ");
            </script>
            '; 
        }
    }
    else{
        echo '
        <script>
            alert("Name Should Not be Empty ! ");
        </script>
        ';
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,tr,th,td{
            border: 1px solid black;
            border-collapse: collapse;
            padding: 5px;
            text-align: center;
        }
        th{
            background-color: #ccc;
        }
    </style>
</head>
<body>
    <h1>Student Information</h1>
<form action="17.php" method="POST">
Name : <input type="text" name="name">
<br><br>
Gender : <input type="radio" name="gender" value="Male">Male <input type="radio" name="gender" value="Female">Female
<br><br>
Class :
<select name="class">
    <option value="I">I</option>
    <option value="II">II</option>
    <option value="III">III</option>
    <option value="IV">IV</option>
    <option value="V">V</option>
    <option value="VI">VI</option>
    <option value="VII">VII</option>
    <option value="VIII">VIII</option>
    <option value="IX">IX</option>
    <option value="X">X</option>
    <option value="XI">XI</option>
    <option value="XII">XII</option>
</select>
<br><br>
<input type="submit" name="add" value="Add">
<input type="submit" name="update" value="Upadte">
<input type="reset">
</form>

<br><br>
<hr>
<table>
    <tr>
        <th>Roll No</th>
        <th>Name</th>
        <th>Gender</th>
        <th>Class</th>
        <th>Modify</th>
    </tr>
<?php
$sql="SELECT * FROM `students`";
$query=mysqli_query($conn,$sql);
if($query){
    $i=1;
    while($data=mysqli_fetch_assoc($query)){
        echo<<<print
        <tr>
            <td>$i</td>
            <td>$data[name]</td>
            <td>$data[gender]</td>
            <td>$data[class]</td>
            <td><a href="./17.php?id=$data[roll_no]">Edit</a> / <a href="./17.php?del=$data[roll_no]">Delete</a></td>
        </tr>
        print;
        $i++;
    }
}


if(isset($_GET['del'])){
    $roll_no=$_GET['del'];
    $sql="DELETE FROM `students` WHERE `roll_no`='$roll_no'";
    $query=mysqli_query($conn,$sql);
    if($query){
        echo '
        <script>
            alert("Student Deleted ! ");
            window.location.href="17.php";
        </script>
        '; 
    }
}


?>




</table>




</body>
</html>