<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form2</title>
</head>
<body>
    <form action="" method="post">
        Fullname:
        <input type="text" name="fullname">
        <br></br>
        gender:
        male
        <input type="radio" value="male" name="gender">
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
    

<?php
$fullname=$email=$gender=$dob=$password=$email="";
if(isset($_POST['fullname']) && 
     isset($_POST['gender']) &&
     isset($_POST['dob'])  &&
     isset($_POST['password']) &&
     isset($_POST['email']))
      {
        $fullname=$_POST['fullname'];
        $gender=$_POST['gender'];
        $dob=$_POST['dob'];
        $password=$_POST['password'];
        $email=$_POST['email'];
      }


?>

    <table>
        <tr>
            <th>fullname</th>
            <th>gender</th>
            <th>dob</th>
            <th>password</th>
            <th>email</th>


        </tr>
        <tr>
            <td><?php echo $fullname; ?></td>
            <td><?php echo $gender; ?></td>
            <td><?php echo $dob; ?></td>
            <td><?php echo $password; ?></td>
            <td><?php echo $email; ?></td>

        </tr> 
    </table>
        
          
    
</body>
</html>