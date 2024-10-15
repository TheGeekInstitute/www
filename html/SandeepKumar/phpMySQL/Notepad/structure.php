<?php
$msg="";
$heading=$content="";
 
$conn=mysqli_connect("localhost","root","toor","SANDEEP",);

if($_SERVER['REQUEST_METHOD']=="POST"){ 

    if(isset($_POST['save'])){
        if(isset($_POST['heading']) && !empty($_POST['heading'])){
            $heading=$_POST['heading'];
            
          if(isset($_POST['content']) && !empty($_POST['content'])){
            $content=$_POST['content'];

            $sql="INSERT INTO `Note`(`heading`, `content`) VALUES ('$heading','$content')";
            $query=mysqli_query($conn,$sql);
            if($query){
                header("location:" . $_SERVER['PHP_SELF']);
            }
          
          }

        }
    }
}












?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task</title>
    <style>

        .container{
            border: 2px solid black;
            background-color:green;
            border-radius: 8px;
            height:800px;

        }
        .heading{
            width: 350px;
            height: 40px;
            margin-left: 100px;
            border: 2px solid black;
            border-radius: 10px;
            margin-top: 10px;
        }
        .content{
            height: 500px;
            width: 350px;
            margin-left: 100px;
            border: 2px solid black;
            border-radius: 5px;
        }

        .body::placeholder{
            margin-bottom:300px;
        }

        .container.box ::button{
            margin-left: 200px;
            background-color: aqua;
        }
        .Save{
            margin-left:180px;
            background-color: aqua;
            border-radius: 5px;
            padding: 5px;
        }

        .update{
            margin-left:60px;
            background-color: aqua;
            border-radius:5px;
            padding: 5px;
        }

    </style>
</head>
<body>
    <div class="container">
       
        <br><br><br>
        <form method="POST">
        <div class="main">
        <input type="text" class="heading" name="heading" placeholder="Heading">
         <br><br><br><br>
 
        <textarea class="content" name="content" placeholder="Write content Here...."></textarea>
         <br><br>
            <button value="Save" class="Save" name="save">Save</button>
            <button value="update" class="update" name="update">Update</button>
        </div>
        </form>
        

       <form action=""><div class="box">
            <table>
                <th>Content</th>
                <th>Action</th>
            </table>
        </div>
           </form>

        


    </div>
</body>
</html>