<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data validation...</title>
</head>
<body>
    <form mathod="POST" enctype=multipart/form-data>

    First Name : <input type="text" name='first'><br><br>
    Middle Name : <input type="text" name='middle'><br><br>
    Last Name : <input type="text" name='last'><br><br>
    DOB : <input type="date" name='date'><br><br>
    Gender :  Male <input type="radio" name='gender' value='male'>
    Female <input type="radio" name='gender' value='female'><br><br>
    <input type="submit">


</form>
    
</body>
</html>


<?php

if($_SERVER['REQUEST_METHOD']=="POST"){
    if(!empty($_POST['first'])){
        $first=$_POST['first'];

        if(!empty($_POST['middle'])){
            $middle=$_POST['middle'];

            if(!empty($_POST['last'])){
                $last=$_POST['last'];

                if(!empty($_POST['date'])){
                    $date=$_POST['date'];

                    if(!empty($_POST['gender'])){
                        $gender=$_POST['gender'];

                        echo '
                        Fisrt Name :'.$first.' <br>
                        Middle Name :'.$middle.'<br>
                        Last Name :'.$last.'<br>
                        Gender :'.$gender.'<br>
                        DOB :'.$date.'<br>

                        ';
                    }
                    else{
                         echo "First name should be entered";
                    }
                }
                else{
                    echo "First name should be entered";
                }
            }
            else{
                 echo "Last name should be entered";               
            }
        }
        else{
            echo "Midlle name should be entered";
        }
    }
    else{
        echo "First name should be entered";
    }
}



?>