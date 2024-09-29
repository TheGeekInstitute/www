<?php 


if($_SERVER['REQUEST_METHOD']=="POST"){
    if(!empty($_POST["first"])){
        $first=$_POST['first'];

        if(!empty($_POST['last'])){
            $last=$_POST['last'];

            if(!empty(@$_POST['gender'])){
                $gender=$_POST['gender'];

                if(!empty($_POST['dob'])){
                    $dob=$_POST['dob'];

                    $pointer=fopen("data.txt" ,'a');
                    fwrite($pointer , "Fisrt Name :" .$first . "\n");
                    fwrite($pointer , "Last Name :" .$last . "\n");
                    fwrite($pointer , "Gender :" .$gender . "\n");
                    fwrite($pointer , "DOB :" .$dob . "\n");
                    fclose($pointer);


                }
                else{
                    echo "please enter the DOB";
                }

            }
            else{
                echo " please enter the gender" ;
            }

        }
        else{
            echo " please enter the lst name ";
        }
    }
    else{
        echo "Please enter the frst name";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form...write read</title>
</head>
<body>
    <form method="Post" >
        First name : <input type="text" name="first"> <br> <br>
        LAst Name : <input type="text" name="last"> <br> <br>
        Gender : Male <input type="radio" name="gender" value="male" >
                female <input type="Radio" name="gender" value="female"><br><br>
        DOB : <input type="date" name="dob" > <br> <br>
         <input type="submit">
         <input type="reset"> <br><br><br>

    </form>
    
</body>
</html>
<?php

$read_pointer=fopen("data.txt", "r");
while(!feof($read_pointer)){
    echo fgets($read_pointer) . "<br>";
}
fclose($read_pointer);
?>