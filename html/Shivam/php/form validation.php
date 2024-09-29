<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form validtion...</title>
</head>

<body>
    <form method="POST">
    First Name : <input type="text" name='first'> <br><br>
    Last Name : <input type="text" name='last'> <br><br>
    Gender :  Female <input type="radio" name='gender'
    value='female'> Male <input type="radio" name='male'> <br> <br>
    Date of Birth : <input type="date" name='dob'> br <br> <br>
    Phone : <input type="number" name='phone'  maxlength='10'> <br> <br>
    Alternat No. : <input type="number" name='altno'> <br> <br>
    Email : <input type="text" name='email'> <br> <br>
    <input type="submit">
    </form>
</body>
</html>

<?php

if($_SERVER['REQUEST_METHOD']=="POST"){
    if(!empty($_POST['first'])){
        $first=$_POST['first'];

        if(!empty($_POST['last'])){
            $last=$_POST['last'];

            if(!empty($_POST['gender'])){
                $gender=$_POST['gender'];

                if(!empty($_POST['dob'])){
                    $dob=$_POST['dob'];

                    if(ctype_digit($_POST['phone']) && strlen($_POST['phone'])==10){
                        $phone=$_POST['phone'];

                        if(ctype_digit($_POST['altno']) && strlen($_POST['altno'])==10){
                            $altno=$_POST['altno'];

                            if(filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
                                $email=$_POST['email'];

                                echo '
                                First Name : '.$first.'
                                Last Name : '.$last.'
                                Gender : '.$gender.'
                                DOB : '.$dob.'
                                Phone : '.$phone.'
                                Alt No. :'.$altno.'
                                Email  : '.$email.'
                                ';
                            }
                            else{
                                echo "email should be entered";
                            }
                        }
                        else{
                            echo "Alternate no. should be entered";
                        }
                    }
                    else{
                        echo "Phone no. should be entered";
                    }
                }
                else{
                    echo "Date Of Birth Should be entered.";
                }
            }
            else{
                echo "Gender should be entered.";
            }
        }
        else{
            echo "Last name should be entered.";
        }

    }
    else{
        echo "Fisrt name should be entered.";
    }
}



?>