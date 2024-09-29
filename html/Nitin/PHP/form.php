<?php
$msg=$firstname=$lastname=$gender=$email=$mobile=$password="";
$error=false;
$show=false;
if($_SERVER['REQUEST_METHOD']=="POST"){
    if(isset($_POST['firstname']) && !empty($_POST['firstname'])){
        $firstname=$_POST['firstname'];

        if(isset($_POST['lastname']) && !empty($_POST['lastname'])){
            $lastname=$_POST['lastname'];
    
            if(isset($_POST['gender']) && !empty($_POST['gender'])){
                $gender=$_POST['gender'];

                if(isset($_POST['email']) && !empty($_POST['email'])){
                    if(filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
                        $email=$_POST['email'];

                        if(isset($_POST['mobile']) && !empty($_POST['mobile'])){

                            if(strlen($_POST['mobile'])==10){
                                $mobile=$_POST['mobile'];


                                if(isset($_POST['password']) && !empty($_POST['password'])){
                                    $password=$_POST['password'];

                                    $show=true;
                                }

                                else{
                                    $error=true;
                                    $msg="Please Enter Password";
                                }
                            }
                            else{
                                $error=true;
                                $msg="Please Enter Valid Mobile Number";
                            }

                        }
                        else{
                            $error=true;
                            $msg="Please Enter Mobile Number";
                        }

                    }
                    else{
                        $error=true;
                        $msg="Please Enter Valid Email Address";
                    }

                }
                else{
                    $error=true;
                    $msg="Please Enter Email Address";
                }

            }
            else{
                $error=true;
                $msg="Please Choose a Gender";
            }
            
            
    
        }
        else{
            $error=true;
            $msg="Please Enter Last name";
        }

    }
    else{
        $error=true;
        $msg="Please Enter First name";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms</title>
</head>
<body>
    <h1>Regstration Form</h1>
    <p>
    <?php
    if($error==true){
        echo $msg;
    }

    ?>
    </p>
    <form method="POST">
        <label>First Name :</label>
        <input type="text" name="firstname">

        <br><br>

        <label>Last Name :</label>
        <input type="text" name="lastname" value="ABCD">
        
        <br><br>

        <label>Gender :</label>
        <input type="radio" name="gender" value="Male">
        <label>Male</label>
        <input type="radio" name="gender" value="Female">
        <label>Female</label>

        <br><br>

        <label>Email :</label>
        <input type="email" name="email">

        <br><br>

        <label>Phone :</label>
        <input type="number" name="mobile">

        <br><br>
        <label>Password :</label>
        <input type="password" name="password">

        <br><br>

        <input type="submit" value="Signup">
        <input type="reset">

    </form>

    <fieldset>
        <legend>Data</legend>

        <?php
if($show){
    echo<<<abcd
    First Name : $firstname <br>
    Last Name : $lastname <br>
    Gender : $gender <br>
    Email : $email <br>
    Mobile : $mobile <br>
    Password : $password
    abcd;
}


        ?>
    </fieldset>



</body>
</html>