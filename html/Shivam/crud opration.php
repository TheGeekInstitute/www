<?php

$conn=mysqli_connect("localhost","root","toor","shivam");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        First name : <input type="text" name="first"> <br><br>
        last name : <input type="text" name="last"> <br><br>
        Gender : Male<input type="radio"  name="gender" value="male"> 
                    Female<input type="radio" name="gender" value="female"> <br><br>
       
        <input type="submit"> <br>
    </form>

    <table>
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Gender</th>
            <th>Modify</th>
        </tr>
<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
    $first=$_POST['first'];
    $last=$_POST['last'];
    $gender=$_POST['gender'];

    $sql="INSERT INTO `students`(`firstname`, `lastname`, `gender`) VALUES (?,?,?)";
    $stmt=mysqli_prepare($conn,$sql);
    mysqli_stmt_bind_param($stmt,"sss",$first,$last,$gender);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_store_result($stmt);
    if(mysqli_stmt_affected_rows($stmt)>0){
        echo "Student added";
        
    }
}

?>
    </table>

</body>
</html>


