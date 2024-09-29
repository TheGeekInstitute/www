<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORm validation</title>
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
            <a href="read-write.php?clear=1">
            <input type="Button" value="Clear">
        </a>
            
<?php

if($_SERVER['REQUEST_METHOD']=="POST"){
    if(isset($_POST['fname']) && !empty($_POST['fname'])){
        $fname=$_POST['fname'];
        if(isset($_POST['lname']) && !empty($_POST['lname'])){
            $lname=$_POST['lname'];
                if(isset($_POST['gender']) && !empty($_POST['gender'])){
                    $gender=$_POST['gender'];
                    if(isset($_POST['class']) && !empty($_POST['class'])){
                        $class=$_POST['class'];
                        
                       $write_mode=fopen("data.txt","a");
                       fwrite($write_mode,"First Name : ". $fname . "\n");
                        fwrite($write_mode,"Last Name :".$lname."\n");
                        fwrite($write_mode,"Gender :".$gender."\n");
                        fwrite($write_mode,"Class :".$class."\n");

                        fclose($write_mode);

                        
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

?>
        </form>
        <fieldset>
        <legend>All Saved Data</legend>

        <?php
        $read_mode=fopen("data.txt","r");
        while(!feof($read_mode)){
            echo fgets($read_mode)."<br>";
        }

        fclose($read_mode);


        if(isset($_GET['clear']) && $_GET['clear']==1){
            $clear_mode=fopen("data.txt","w");
            fclose($clear_mode);
            header("Location:read-write.php");
            
        }
?>

    </fieldset>
</body>
</html>
