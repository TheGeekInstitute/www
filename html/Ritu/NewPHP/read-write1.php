
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
        <input type="submit" value="Registration">
        <a href="read-write1.php?clear=1">
            <input type="Button" value="Clear">
        </a>
            </fieldset>
        </form>

        <br><br><br>
        
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

                    $write_fptr=fopen("data.txt","a");
                    fwrite($write_fptr,"Name : ". $fname . " " .     $lname. "\n");
                    $write_fptr=fopen("data.txt","a");
                    fwrite($write_fptr,"Gender : ". $gender . "\n");
                    fwrite($write_fptr,"Class : ". $class . "\n\n");

                    fclose($write_fptr);

                }
                else{
                    echo "Please choose Your Class";
                }
            }
                else{
                    echo "Please Select Your Gender";
                }
            }
                else{
                    echo "Please Enter Your Last Name";
                }
            }
                else{
                    echo "Please Enter Your First Name";
                }
            }

           ?>
           <br><br><br>
           <?php
            $read_fptr=fopen("data.txt","r");
            while (!feof($read_fptr)){
                echo fgets($read_fptr) . "<br>";
            }

                fclose($read_fptr);


                if(isset($_GET['clear']) &&  $_GET['clear']==1){
                    $clear_fptr=fopen("data.txt","w");

                    fclose($clear_fptr);
                    header("Location:read-write1.php");
                }


          ?>
          

            


    
</body>
</html>
