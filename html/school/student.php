<?php
session_start();
require("db.php");
$first=$last=$gender=$class="";
if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(!empty($_POST['first'])){
        $first=$_POST['first'];
        if(!empty($_POST['last'])){
            $last=$_POST['last'];
            if(!empty($_POST['gender'])){

                 $gender=$_POST['gender'];
                
                if(!empty($_POST['class']) && $_POST['class']!="Choose"){
                    $class=$_POST['class'];
                
                        if(isset($_POST['add'])){
                            $sql="INSERT INTO `students`(`firstname`, `lastname`, `gender`, `class`) VALUES ('$first','$last','$gender','$class')";
                            $query=mysqli_query($connection,$sql);
                            if($query){
                                echo '
                                <script>
                                    alert("Student Added ! ");
                                </script>
                                ';
                            }
                        
                   
                }
                else{
                echo ' 
                <script>
                alert ("Class Should not be Empty")
                </script>';
                  }
          
                }
                else{
                    echo ' 
                <script>
                alert ("Gender Should not be Empty");
                </script>';
                }
        }
        else{
            echo ' 
            <script>
            alert ("Last Name Should not be Empty")
              </script>';      
        }
    }
    else{
      echo ' 
      <script>
      alert ("First Name Should not be Empty")
        </script>';
    }

}
}


if(isset($_GET['edit']) && ctype_digit($_GET['edit'])){
    $roll_no=$_GET['edit'];
    $sql="SELECT * FROM `students` WHERE `roll_no`='$roll_no'";
    $query=mysqli_query($connection,$sql);
    if($query){
        $data=mysqli_fetch_assoc($query);
        $first=$data['firstname'];
        $last=$data['lastname'];
        $gender=$data['gender'];
        $class=$data['class'];
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student</title>
    <style>
   .data, .data tr , .data th , .data td{
    padding-top: 5px;
    border: 1px solid black;
    padding: 5px;
    border-collapse: collapse;
    text-align: center;
  }

    </style>
</head>
<body>
    <form action="student.php" method="post">
<table>
    <tr>
        <td><label for="">First Name :</label></td>
        <td><input type="text" name="first" id=""></td>
    </tr>
    <tr>
        <td><label for="">Last Name :</label></td>
        <td><input type="text" name="last" id=""></td>
    </tr>
    <tr>
        <td><label for="">Gender :</label></td>
        <td><label for=""><input type="radio" name="gender" value="Male" >Male</label>
        <label for=""><input type="radio" name="gender" value="Female">Female</label></td>
    </tr>
    <tr>
        <td><label>Class :</label></td>
        <td>
            <select name="class">
        <option value="Choose">Choose</option>
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
         <option value="XII">XII</option></td>
    </tr>
   
    <td><input type="submit" name="add" value="Add">
        <input type="submit" name="update" value="Upadte">
        <input type="reset">
    </td>
</tr>
</table>
</form>
<table class="data">
        <tr>
        <th>Roll No.</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Gender</th>
        <th>Class</th>
        <th>Modify</th>
    </th>
</tr>
<?php

$sql="SELECT * FROM `students`";
$query=mysqli_query($connection,$sql);
if($query){
    $i=1;
    while($data=mysqli_fetch_assoc($query)){
        echo<<<print
        <tr>
            <td>$i</td>
            <td>$data[firstname]</td>
            <td>$data[lastname]</td>
            <td>$data[gender]</td>
            <td>$data[class]</td>
            <td><a href="./student.php?id=$data[roll_no]">Edit</a> / <a href="./student.php?del=$data[roll_no]">Delete</a></td>
        </tr>
        print;
        $i++;
    }
}


if(isset($_GET['del'])){
    $roll_no=$_GET['del'];
    $sql="DELETE FROM `students` WHERE `roll_no`='$roll_no'";
    $query=mysqli_query($connection,$sql);
    if($query){
        echo '
        <script>
            alert("Student Deleted ! ");
            window.location.href="student.php";
        </script>
        ';  }
    }




?>




</table>


    
</body>
</html>