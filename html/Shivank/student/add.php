<?php
session_start();
$connection=mysqli_connect("localhost","root","toor","shivank");

$class_arr=["I","II","III","IV","V","VI","VII","VIII","IX","X","XI","XII"];
$gender_arr=["Male","Female"];
$section_arr=["A","B","C"];
// if(isset($_SESSION['login']) && $_SESSION['login']=true){
//     $firstname=$_SESSION['firstname'];
//     $lastname=$_SESSION['lastname'];
//    $user_id=$_SESSION['user_id'];

// }
// else{
//     header("location:login.php");
//     die();
// }

// require("db.php");

//student info

$first=$last=$gender=$class=$section="";
if($_SERVER['REQUEST_METHOD']=='POST'){
    if(!empty($_POST['first'])){
        if(ctype_alpha($_POST['first']) && strlen($_POST['first'])<=30){
            $first=$_POST['first'];
            if(!empty($_POST['last'])){
                if(ctype_alpha($_POST['last']) && strlen($_POST['last'])<=30){
                    $last=$_POST['last'];
                    if(!empty($_POST['gender']) && in_array($_POST['gender'],$gender_arr)){
                            $gender=$_POST['gender'];
                            if(!empty($_POST['class']) && $_POST['class']!="Choose" && in_array($_POST['class'],$class_arr)){
                              $class=$_POST['class'];
                                
                                
                                if(!empty($_POST['section']) && in_array($_POST['section'],$section_arr)){
                                    $section=$_POST['section'];
                                        //add student
                                        $sql="INSERT INTO `student`( `first_name`, `last_name`, `gender`, `class`, `section`) VALUES (?,?,?,?,?)";
                                       
                                        $insert_stmt=mysqli_prepare($connection,$sql);
                                         mysqli_stmt_bind_param($insert_stmt,"sssss",$first,$last,$gender,$class,$section);
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
                                else{
                                    echo '
                                    <script>
                                        alert("Section Should Not Be Empty");
                                    </script>'; 
                                }
                            }   
                            else{
                                echo '
                                <script>
                                    alert("Class Should Not Be Empty");
                                </script>'; 
                            }                    
             }
                    else{
                        echo '
                        <script>
                            alert("Gender Should Not Be Empty");
                        </script>
                        '; 
                    }
            }
             else{
                    echo '
                    <script>
                        alert("Invalid Last Name");
                    </script>
                    '; 
                }
    }   
        else{
                echo '
                <script>
                    alert("Last Name Should Not Be Empty");
                </script>';
                }
        }
        else{
            echo '
        <script>
            alert("Invalid First Name");
        </script>';
        }
    }
    else{
        echo '
        <script>
            alert("First Name Should Not Be Empty");
        </script>';
    }
}
if(isset($_GET['del']) && !empty($_GET['del']) && ctype_digit($_GET['del'])){
    $roll=$_GET['del'];
    $sql="DELETE FROM `student` WHERE `roll_no`=?";
    $delete_stmt=mysqli_prepare($connection,$sql);
    mysqli_stmt_bind_param($delete_stmt,"i",$roll);
    mysqli_stmt_execute($delete_stmt);
    mysqli_stmt_store_result($delete_stmt);
    if(mysqli_stmt_affected_rows($delete_stmt)==1){
        echo'
        <script>
        alert("Student Deleted");
        window.location.href="add.php";
        </script>';
    }
    else{
        echo'
        <script>
        alert("Can Not Delete Student At This Time");
        window.location.href="add.php";
        </script>';
    }
    mysqli_stmt_close($delete_stmt);
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student</title>
</head>
<body>
    <form action="" method="post">
<table>
    <tr>
        <td><label for="">Roll No :</label></td>
        <td><input type="number" name="roll" value="<?php echo $roll; ?>"></td>
    </tr>
    <tr>
        <td><label for="">First Name :</label></td>
        <td><input type="text" name="first" value="<?php echo $first; ?>"></td>
    </tr>
    <tr>
        <td><label for="">Last Name :</label></td>
        <td><input type="text" name="last" value="<?php echo $last; ?>"></td>
    </tr>
    <tr>
        <td><label for="">Gender :</label></td>
        <td><label for=""><input type="radio" name="gender" value="Male"  <?php if($gender=="Male"){ echo "checked"; } ?>>Male</label>
        <label for=""><input type="radio" name="gender" value="Female" <?php if($gender=="Female"){ echo "checked"; } ?>>Female</label></td>
    </tr>
    <tr>
        <td><label>Class :</label></td>
        <td>
            <select name="class">
        <option value="Choose">Choose</option>
        <option value="I"<?php if($class=="I"){ echo "selected"; } ?>>I</option>
        <option value="II"<?php if($class=="II"){ echo "selected"; } ?>>II</option>
        <option value="III"<?php if($class=="III"){ echo "selected"; } ?>>III</option>
        <option value="IV"<?php if($class=="IV"){ echo "selected"; } ?>>IV</option>
        <option value="V"<?php if($class=="V"){ echo "selected"; } ?>>V</option>
        <option value="VI"<?php if($class=="VI"){ echo "selected"; } ?>>VI</option>
        <option value="VII"<?php if($class=="VII"){ echo "selected"; } ?>>VII</option>
        <option value="VIII"<?php if($class=="VIII"){ echo "selected"; } ?>>VIII</option>
        <option value="IX"<?php if($class=="IX"){ echo "selected"; } ?>>IX</option>
        <option value="X"<?php if($class=="X"){ echo "selected"; } ?>>X</option>
         <option value="XI"<?php if($class=="XI"){ echo "selected"; } ?>>XI</option>
         <option value="XII"<?php if($class=="XII"){ echo "selected"; } ?>>XII</option></td>
    </tr>
    <tr>
        <td><label for="">Section :</label></td>
        <td><select name="section">
            <option value="Choose">Choose</option>
            <option value="A"<?php if($section=="A"){ echo "selected"; } ?>>A</option>
            <option value="B"<?php if($section=="B"){ echo "selected"; } ?>>B</option>
            <option value="C"<?php if($section=="C"){ echo "selected"; } ?>>C</option>
        </select></td>
    </tr>
    <tr>
        <td><input type="submit" value="Add"></td>
    </tr>
</table>


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

$sql="SELECT `roll_no`, `first_name`, `last_name`, `gender`, `class`, `section` FROM `student`";
$display_stmt=mysqli_prepare($connection,$sql);
mysqli_stmt_bind_result($display_stmt,$roll,$first_name,$last_name,$gender,$class,$section);
mysqli_stmt_execute($display_stmt);
mysqli_stmt_store_result($display_stmt);
if(mysqli_stmt_num_rows($display_stmt)>0){
    while(mysqli_stmt_fetch($display_stmt)){
        echo<<<print
        <tr>
            <td>$roll</td>
            <td>$first_name</td>
            <td>$last_name</td>
            <td>$gender</td>
            <td>$class</td>
            <td>$section</td>
            <td><a href="add.php?edit=$roll">Edit</a> / <a href="add.php?del=$roll">Delete</a></td>
        </tr>
        print;
    }
}
else{
    echo '<tr>
    <td colspan="5">No Result Found</td>
    
    <tr>';
}








mysqli_close($connection);
?>

    
</body>
</html>