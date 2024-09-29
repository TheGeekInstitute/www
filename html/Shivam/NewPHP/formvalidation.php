<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form validation</title>
</head>
<body>
    <fieldset>
        <legend>Regstration Form</legend>
        <form method="Post" enctype="multipart/form-data">
            First Name : <input type="text" required title="Please Enter First Name" placeholder="Please Enter Your Name" minlength="3" maxlength="15" size="30" name="fname">
            <br><br>
            last Name : <input type="text" required title="Please Enter Last Name" placeholder="Please Enter Last Name" name="lname">
<br><br>
Gender  : Male <input type="radio" name="gender" value="male" >
          Female <input type="radio" name="gender" value="female">
<br><br>
 Class  : <select name="class">
    <option value="" selected>Choose</option>
    <option value="10" >10</option>
    <option value="11">11</option>
    <option value="12">12</option>
</select>
            <br><br>
            <input type="submit" value="Regstration">
            
        </form>
    
</body>
</html>


<?php

$team=fopen("data.txt" , "a");

$fname=$lname=$gneder=$class="";

if($_SERVER['REQUEST_METHOD']=="POST"){
    if(isset($_POST['fname']) && !empty($_POST['fname'])){
        $fname=$_POST['fname'];
        if(isset($_POST['lname']) && !empty($_POST['lname'])){
            $lname=$_POST['lname'];
                if(isset($_POST['gender']) && !empty($_POST['gender'])){
                    $gender=$_POST['gender'];
                    if(isset($_POST['class']) && !empty($_POST['class'])){
                        $class=$_POST['class'];
                        $data="echo<<<print
                        Nama : $fname $lname <br>
                        Gender : $gender <br>
                        Class : $class <br>
                        print";
                        echo $data;
                    }
                    else{
                        echo "Please Enter  Class name.";
                    }
                }
                else{
                    echo "Please Enter  Gender name.";
                }
            
        }
        else{
            echo "Please Enter  Last name.";
        }
    }
    else{
        echo "Please Enter Your First name.";
    }
}
fwrite($team,$data . "\n");

fclose($team);

?>