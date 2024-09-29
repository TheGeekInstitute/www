<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form action="" method="POST">
        <label for="">First Name :</label>
        <input type="text" name="firstname">

        <br><br>

        <label for="">Last Name : </label>
        <input type="text" name="lastname">

        <br><br>

        <label for="">Gender :</label>

        <label for="">Male</label>
        <input type="radio" name="gender" id="" value="Male">

        <label for="">Female</label>
        <input type="radio" name="gender" id="" value="Female">

        <br><br>

        <input type="submit" value="Submit">
    </form>

    <br>
</body>
</html>
<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
   if(isset($_POST['firstname']) && !empty($_POST['firstname'])){
    $firstname = $_POST['firstname'];

    if(isset($_POST['lastname']) && !empty($_POST['lastname'])){
        $lastname = $_POST['lastname'];

        if(isset($_POST['gender']) && !empty($_POST['gender'])){
            $gender = $_POST['gender'];

            echo<<<abcd
            First Name : $firstname <br>
            Last Name : $lastname <br>
            Gender : $gender <br>


            abcd;


           }
           else{
            echo "Choose a Gender";
           }
       }
       else{
        echo "Please Enter First Name";
       }
   }
   else{
    echo "Please Enter First Name";
   }
}
?>