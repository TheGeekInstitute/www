<?php
session_start();
$connection=mysqli_connect("localhost","root","toor","shukla");

$class_arr=["I","II","III","IV","V","VI","VII","VIII","IX","X","XI","XII"];
$gender_arr=["Male","Female"];
$section_arr=["A","B","C"];
if(isset($_SESSION['login']) && $_SESSION['login']=true){
    $firstname=$_SESSION['firstname'];
    $lastname=$_SESSION['lastname'];
   $user_id=$_SESSION['user_id'];

}
else{
    header("location:login.php");
    die();
}

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
                                        $sql="INSERT INTO `students`(`firstname`, `lastname`, `gender`, `class`, `section`, `teacher`) VALUES ('$first','$last','$gender','$class','$section','$user_id')";
                                        // $query=mysqli_query($sql,$connection);
                                        $query=mysqli_query($connection,$sql);
                                      
                                        if($query){
                                            echo '
                                            <script>
                                                alert("Student Added");
                                                window.location.href="main.php";
                                            </script>';
                                        }
                                    
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

// $class=["i","ii","iii"];

// var_dump(in_array("iV",$class));


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
        <td><input type="number" name="roll" id=""></td>
    </tr>
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
    <tr>
        <td><label for="">Section :</label></td>
        <td><select name="section">
            <option value="Choose">Choose</option>
            <option value="A">A</option>
            <option value="B">B</option>
            <option value="C">C</option>
        </select></td>
    </tr>
    <tr>
        <td><input type="submit" value="Add"></td>
    </tr>
</table>


    </form>
    
</body>
</html>