<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INSERT</title>
    <style>
        table,tr,td.th{
            border: 2px solid black;
            margin: 3px;
            padding: 3px;
        }
        td{
            border: 2px solid black;

        }
        th{
            background-color: blue;
        }
    </style>
</head>
<body>
    <form action="" method="POST">
        <!-- Roll_NO : <input type="number" name="roll"> -->
        Name : <input type="text" name="name"><br><br>
        Class : <select name="class" >
            <option value="XI">XI</option>
            <option value="XII">XII</option>
        </select><br><br>
        Gender : Male<input type="radio" name="gender" value="male">
            Female   <input type="radio" name="gender" value="female"><br><br>
        <select name="stream">
            <option value="Science">Science</option>
            <option value="Commerce">Commerce</option>
            <option value="Arts">Arts</option>
        </select>
       <input type="submit"> 
    </form>
    


<?php
$conn =mysqli_connect("localhost","root","toor","shivam");
if($_SERVER['REQUEST_METHOD']=="POST"){
    if(!empty($_POST['name'])){
        $name=$_POST['name'];
        if(!empty($_POST['class'])){
            $class=$_POST['class'];
            if(!empty($_POST['gender'])){
                $gender=$_POST['gender'];
                if(!empty($_POST['stream'])){
                    $stream=$_POST['stream'];
                    $sql="INSERT INTO `classes`(`name`, `class`, `gender`, `stream`) VALUES ('$name','$class','$gender','$stream')";
                    $query=mysqli_query($conn,$sql);
                    if($query){
                        echo "Student Added";
                        
                    }
                }
                else{
            echo "Please Choose a stream";
            
                }
            }
            else{
            echo "Please Choose a gender";

            }
        }
        else{
            echo "Please Choose a Class";
        }
    }
    else{
        echo "Name Should Not Be Empty";
    }
}


?>

    <table>    
        <th>Roll_NO:</th>
        <th>Name:</th>
        <th>Class:</th>
        <th>Gender:</th>
        <th>Stream :</th>
    </tr>
    <?php
    $sql= "SELECT * FROM `classes`";
$query=mysqli_query($conn,$sql);
while($data=mysqli_fetch_assoc($query)){
    echo'
    <tr>
        <td>'.$data['roll_no'].'</td>
        <td>'.$data['name'].'</td>
        <td>'.$data['class'].'</td>
        <td>'.$data['gender'].'</td>
        <td>'.$data['stream'].'</td>
    </tr>';
}
    ?>
    </table>
    
</body>
</html>