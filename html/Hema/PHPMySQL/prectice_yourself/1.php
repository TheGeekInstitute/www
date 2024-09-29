<?php
$host = "localhost";
$user = "root";
$pass = "toor";
$db  = "hema";


$conn = mysqli_connect($host,$user,$pass,$db);

$emp_no=$name=$gender=$salary="";


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
     *{

            margin: 0;
            padding: 0;
            box-sizing: border-box;
            background-color:gray
        
     }
        .box{
            background-color: black;
            text-align: center;
            padding: 5px;
            width: 270px;
            margin: 150px auto;
            border-radius: 10px;
        }
        .box form{
            background-color: black;
            color:white;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }

        .box form label{
            display: block;
            background-color: black;
            width: 250px;
            text-align: left;
            font-weight: 900;
            font-size: large;
            margin-block: 5px;
        }

        .box form input{
            background-color:white;
            border: 1px solid white;
            outline-style: none;
            width: 250px;
            padding: 2px 5px;
            height: 35px;
            margin-block: 5px;
            font-size: large;
        }

        .box .msg{
         
            height: 30px;
            text-align: center;
        }

        .box .msg p{
            line-height: 30px;
            font-size: large;
        }

        .box form input[type="submit"]{
            background-color:black;
            color: white;
            width: 100px;
        }
    </style>
</head>
<body>
    <div class="box">
        <h1>Sign up</h1>
        <div class="msg">
            <!-- <p <?php echo $msg ; ?>></p> -->
        </div>

<form action="" method="POST">
<label for="">Name</label>

<input type="text" name="name">

<label for="">Username</label>

<input type="text" name="username">

<label for="">Password</label>

<input type="text" name="password">

<label for="">Salary</label>

<input type="text" name="salary">

<label for="">Gander</label>
<select name="gender" id="">
        <option value="">Choose</option>
        <option value="Male">Male</option>
        <option value="Female" >Female</option>
        <option value="Others" >Others</option>
    </select>
    
    <input type="submit" value="signup">

</br>



</form>
</div>

<br></br>


<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
    if(isset($_POST["name"]) &&! empty($_POST['name'])){
        $name=$_POST['name'];
    

    if(isset($_POST["gender"]) &&! empty($_POST['gender'])){
        $name=$_POST['gender'];
    

    if(isset($_POST["salary"]) &&! empty($_POST['salary'])){
        $name=$_POST['salary'];
    }
    else{
        echo "plese enter salary";
    }
}


    else{
        echo "please emter gender";
    }

}


else{
    echo "please enter name";

}
    
}


?>
    
</body>
</html>