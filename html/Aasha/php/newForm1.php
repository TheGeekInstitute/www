<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
</head>
<body>
    <form action="" method="POST">
        Full Name:
        <input type="text" name="fullname">
        <br></br>

        gendre:
        Male
        <input type="radio" value="Male" Name="gender">
        female
        <input type="radio" value="female" name="gender">
        <br></br>

        dob:
        <input type="date" name="dob">
        <br></br>
        password:
        <input type="text" name="password">
        <br></br>
        email:
        <input type="text" name="email">
        <br></br>


        <input type="SUBMIT" value="show">
        
    </form>  
</body>
</html>
<?php
if(isset($_POST['fullname']
)&& isset($_POST['gender'])
 && isset($_POST['dob'])
  && isset($_POST['email'])
   && isset($_POST['password'])
    && isset($_POST ['email'])){

        
    $fullname=$_POST['fullname'];
    $gender=$_POST['gender'];
    $dob=$_POST['dob'];
    $password=$_POST['password'];
    $email=$_POST['email'];

    echo '
    Full name '.$fullname.'<br>
    Gender :'.$gender.'<br>
    Dob :'.$dob.' <br>'; 


     echo<<<abcd
     full name: $fullname <br>
     gender:$gender <br>
     DOB : $dob <br>
     password: $password <br>
     email:  $email <br>
     abcd; 


}



?>
