<?php


if(isset($_POST['first']) && isset($_POST['last']) && isset($_POST['gender'])){
    if(!empty($_POST['first'])){
        $first=$_POST['first'];
        if(!empty($_POST['last'])){
            $last=$_POST['last'];
            if(!empty($_POST['gender'])){
                $gender=$_POST['gender'];
                $show=true;
            $msg= "Hello,". $first. $last. " ". "Registration Successfully";
        }
        else{
           

            $msg= "Please Select Your Gender";
        }
            
        }
        else{
            $msg= "Please Enter Your Last Name";
        }

    }
    else{
                

        $msg= "Please Enter Your First Name";
    }
 }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;

        }
        .container{
            /* border: 1px solid red; */
            height: 40vh;
            width: 30rem;
            margin: auto;
            margin-top: calc(50% - 35vh);
            background-color: teal;
            border-radius: 10px;
            box-shadow: 2px 2px 4px black;
            padding-top: 20px ;
            
            
            

        }
        .container h1{
            font-size: 2.2rem;
            /* padding: 10px; */
            color: white;
            margin-bottom: 1.5rem;
            /* width: 20rem; */
            font-family: sans-serif;
            text-align: center;
            text-decoration: 2px underline;

        }
        input[type=text]{
            margin-top: .8rem;
            height: 2rem;
            width:18rem ;
            padding: 0 10px;
            outline: none;
            font-size: 0.9rem;
            background-color: transparent;
            border-radius: 5px;
            border: 1px solid grey;
            color:aliceblue;
            
           
            
        }
        input[type=text]:focus{
            transform: scale(1.1);
            margin-left: 1rem;
            background-color: rgba(0, 255, 255, 0.507);
        }
        label{
            font-size: 1.3rem;
            padding: 10px;
            color: rgb(211, 206, 206);

        }
        label::placeholder{
            font-size: 0.9rem;
            border-radius: 10px;
            
        }
        input[type=submit]{
            height: 2.2rem;
            width: 5rem;
            font-size: 1.2rem;
            margin-left: 7rem ;
            margin-right: 3rem;
            margin-top:1.5rem;
            background-color: blue;
            color:white;
            border: none;
            border-radius: 5px;
        }
        input[type=submit]:active{
            background-color: white;
            color: rgba(12, 12, 241, 0.829);
        }
        input[type=checkbox]{
            display:none;
        }
        .data{
            padding: 7px 1.5rem;
            font-family: sans-serif;
            font-size: 1.2rem;
            background-color: blue;
            color:white;
            border: none;
            border-radius: 5px;
        }
        .data:active{
            color:red;
            background-color:white;
        }
        .container form .msg{
            background-color: teal;
            color: white;
            /* padding: 10px; */
        }

        
    </style>
</head>
<body>
    <div class="container">
        <h1>Admission Form</h1>
        <form method="post" enctype=multipart/form-data>
           <label> First Name:</labela>
               <input type="text" required title="Please enter First Name"Placeholder="Enter your first name" name="first">
               <br><br>
            <label>Last Name:</label>
            <input type="text" required title="Please enter the Last Name"Placeholder="Enter your last name" name="last">
            <br><br>
            <label>Gender:</label>
            <label>Male</label>
             <input type ="radio" name="gender">
             <label>Female</label> 
              <input type="radio"name="gender">      
              <br><br>
              <input type="submit" value="submit">
              <input type="checkbox" id="btn">
              <label for="btn" class="data">Next</label>
              
        </form> 
    </div>
</body>
</html>

