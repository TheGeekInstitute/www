<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;

        }
        .box{
            border: 2px solid black;
            text-align: center;
            align-items: center;
            width: 400px;
            margin-top: 200px;
            display: flex;
            justify-content: center;
            padding: 20px;
            margin-left: 200px;
        }
        .show{
            border: 2PX solid black;
                height: 200px;
                width: 300px;
                align-items: center;
                text-align: center;
                margin: 200px;
                
        }
    </style>
</head>
<body>
    <div class="box">
<form method="POST">
    Name : <input type="text" name="name">
    <br><br>
    Class : <select name="stream">
        <option value="">Choose</option>
        <option value="art">art</option>
        <option value="commerce">commerce</option>
        <option value="Science">Science</option>
    </select>
    <br><br>
    Gender :
    <select name="gender">
        <option value="">choose</option>
        <option value="Male">Male</option>
        <option value="Female">Female</option>
        <option value="Others">Others</option>
    </select>
    <br><br>
    DOB : <input type="date" name="dob">
    <br><br>
    <input type="submit">
    <input type="reset">
</form>



    </div>
<?php
$conn=mysqli_connect("localhost","root","toor","Nikhil");
if($_SERVER['REQUEST_METHOD']=="POST"){
    if(isset($_POST['name']) && !empty($_POST['name'])){
        $name =$_POST['name'];

        if(isset($_POST['stream']) && !empty($_POST['stream'])){
            $stream=$_POST['stream'];

            if(isset($_POST['gender']) && !empty($_POST['gender'])){
                $gender = $_POST['gender'];
                if(isset($_POST['dob']) && !empty($_POST['dob'])){
                    $dob=$_POST['dob'];

                    $sql="INSERT INTO `students`(`name`, `class`, `gender`, `dob`) VALUES ('$name','$stream','$gender','$dob')";

                    $query=mysqli_query($conn,$sql);
                    if($query){
                        echo "Data has been Inserted";
                    }
                    else{
                        echo "cant not insert data , Server Busy";
                    }

                }
                else{
                    echo "Please Ente DOB";
                }
            }
            else{
                echo "Plsease Choose a Gender";
            }
        }
        else{
            echo "Please choose a Stream";
        }
    }
    else{
        echo "Please Enter Name";
    }
}

mysqli_close($conn);

?>

    <div class="show">

    </div>
</body>
</html>