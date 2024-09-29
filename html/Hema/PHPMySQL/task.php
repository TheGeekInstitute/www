<?php
$host="localhost"; //127.0.0.1
$user="root";
$pass="toor";
$db="hema";

$conn=mysqli_connect($host,$user,$pass,$db);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login user</title>
</head>
<body>
  <form action="" METHOD="POST">
  name:
  <input type="text" name="name">

  <br><br>

  Gender:
  <select name="gender" id="">

  <option value="">choose</option>
  <option value="Male">Male</option>
  <option value="Female">Female</option>
  <option value="Others">Others</option>
  </select>


  <br><br>
  Email:
  <input type="text" name="email">
  <br><br>

  salary:
  <input type="number" name="salary">

  <br></br>

  City:
  <input type="text" name="city">
  <br><br>
  <input type="submit" value="Save">
  </form>


  <br></br>


  <?php
 if($_SERVER['REQUEST_METOD']==POST){
    if(isset($_POST['name']) && !empty($_POST['name'])){
        $name=$_POST['name'];
    

if(isset($_POST['gender']) && !empty($_POST['gender'])){
    $name=$_POST['gender'];
}
if(isset($_POST['email']) && !empty($_POST['email'])){
    $name=$_POST['email'];
}
if(isset($_POST['salary']) && !empty($_POST['salary'])){
    $name=$_POST['salary'];
}
if(isset($_POST['city']) && !empty($_POST['city'])){
    $name=$_POST['city'];
}
    }
else{
    echo "Please Enter City";
} 

else{
    echo "Please Enter Salary";
}

else{
    echo "Please Enter Email";
}
else{
    echo "Please Enter Gender";
}


else{
    echo "Please Enter Name";
}

    }

?>
<fieldset>

<legend>Data<legend>

<table border="1px" width="50%">
    
    <tr>
        <th>Emp No</th>
        <th>Name</th>
        <th>Gender</th>
        <th>Salary</th>
    </tr>

    
    </fieldset>
</body>
</html>