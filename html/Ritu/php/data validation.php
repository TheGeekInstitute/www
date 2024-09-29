
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" enctype="multipart/form-data">
        First Name : <input type="text" name="first">
        <br><br>
        Middle Name : <input type="text" name="middle">
        <br><br>
        Last Name : <input type="text" name="last">
        <br><br>
        Gender :  Female<input type="radio" name="gender" value="female">
        Male <input type="radio" name='gender' value="male">
        <br><br>
        DOB : <input type="date" name=date>

        <br><br>
        <input type="submit">
        <input type="reset">
    </form>
    
</body>
</html>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(!empty ($_POST["first"])){
        $first=$_POST['first'];
        if(!empty($_POST["middle"])){
            $middle=$_POST["middle"];
            if(!empty($_POST['last'])){
                $last=$_POST['last'];
                if(!empty($_POST['gender'])){
                    $gender=$_POST['gender'];
                    if(!empty($_POST['date'])){
                        $date=$_POST['date'];
                        
                            echo '
                            First Name: '. $first.' <br>
                            Middle Name : '.$middle.' <br>
                    Last name : '.$last.' <br>
                    Gender : '.$gender.' <br>
                    DOB : '.$date.' <br>
                    ';

             }
                else{
                    echo "Enter a valid DOB";
                }
            }
            else{
                echo "Please Choose a Gender";
            }
        }
        else{
           " Last Name should be entered";
            }

        }
else{
    echo "Middle Name should be entered";
}

    }

    else{
        echo "First Name should be entered";
    }
}





?>