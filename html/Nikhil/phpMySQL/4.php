<?php

$conn=mysqli_connect("localhost","root","toor","Nikhil");
$msg="";
if($_SERVER['REQUEST_METHOD']=="POST"){
    if(isset($_POST['name']) && !empty($_POST['name'])){
      
        $name =$_POST['name'];
        if(isset($_POST['lname']) && !empty($_POST['lname'])){
            $lname=$_POST['lname'];
            if(isset($_POST['dob']) && !empty($_POST['dob'])){
                $dob=$_POST['dob'];
                if(isset($_POST['phone']) && !empty($_POST['phone']) && strlen($_POST['phone'])==10){
                    $phone=$_POST['phone'];
                    if(isset($_POST['class']) && !empty($_POST['class'])){
                        
                        
                        
                        $class=$_POST['class'];



                        if(isset($_POST['gender']) && !empty($_POST['class'])){
                            $gender=$_POST['gender'];


                            if(isset($_POST['address']) && !empty($_POST['address'])){
                                $address = $_POST['address'];
                                $sql="INSERT INTO `data`(`Name`, `Last Name`, `Date Of Birth`, `Phone`, `Class`, `Gender`, `Address`) VALUES ('$name','$lname','$dob','$phone','$class','$gender','$address')";

                                $query=mysqli_query($conn,$sql);

                                if($query){
                                    $msg= "Data has been Inserted";
                                }
                                else{
                                    $msg = " Data has not been Inserted";
                                }
                            }
                            else{
                                $msg =  "enter Your Address";
                            }


                        }
                        else{
                            $msg =  "Choose Your Class";
                        }
                    }
                    else{
                        $msg =  "Choose Your Class";
                    }
                }
                else{
                    $msg =  "enter your Phone number";
                }
            }
            else{
                $msg =  "enter you Date Of birth";
            }
        }
        else{
            $msg =  "enter youe last name";
        }
    }
    else{
        $msg =  "enter your first name";
    }
}


mysqli_close($conn);

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data</title>
    <style>

        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body{
            background-image: url("https://img.freepik.com/premium-photo/stylish-papercut-background_266768-870.jpg?size=626&ext=jpg&ga=GA1.1.632798143.1705622400&semt=ais");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            /* height: 100vh; */
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }

        
        .box{
         
      
            width: 17rem;
            margin: 2rem auto;
            padding: .5rem 0;
            background-color: rgba(255, 255, 255, 0.5);
            border-radius: 1rem;
            box-shadow: 0px 0px 5px black;

        }

        .box form{
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }

        .box form input, .box form select{
            border: none;
            border: 2px solid black;
            border-width: 1px 1px 3px 1px;
            outline: transparent;
            border-radius: 3px;
            padding: 3px 5px;
            height: 2rem;
            width: 15rem;
            margin: .2rem 0;
            font-size: .9rem;
            font-weight: 700;
            background-color: rgba(255, 255, 255, 0.3);

        }

        .box form label{
            display: block;
            width: 15rem;
         
            font-size: large;
            margin: 2px 0;
            font-weight: 900;
            
        }

        .box form textarea{
            height: 4rem;
            width: 15rem;
            outline: transparent;
            border: none;
            border: 2px solid black;
            border-width: 1px 1px 3px 1px;
            background-color: rgba(255, 255, 255, 0.3);
            border-radius: 3px;
        }

        .box form input[type="submit"]{
            background-color: royalblue;
            color: white;
            width: 10rem;
            transition: all .3s ease-in-out;
            cursor: pointer;
        }

        .box form input[type="submit"]:active{
            transform: scale(.9);
        }
        .box .notification{
    
            height: 3rem;
            font-size: large;
            /* color: ; */
            text-align: center;
        
            text-decoration-color: royalblue;
            font-weight: 900;
        }



    </style>
</head>
<body>
    <div class="box">
        <div class="notification">
           <?php echo  $msg; ?>
        </div>
        <form method="post">
            <label for="">First Name </label> 
            <input type="text" name="name">  
            <label for="">Last Name  </label>
            <input type="text" name="lname">
            <label for=""> DOB </label>
            <input type="date" name="dob">  
            <label for="">Phone No </label>
            <input type="number" name="phone" minlength="10" maxlength="10" >
         
            <label for="">Class:</label>
            <select name="class">
                <option value="choose">Choose</option>
                <option value="six">6th</option>
                <option value="seven">7th</option>
                <option value="eight">8th</option>
                <option value="nine">9th</option>
                <option value="ten">10th</option>
                <option value="eleven">11th</option>
                <option value="twelve">12th</option>
            </select>
            <label for="">Gender </label>
            <select name="gender">
                <option value="choose">Choose</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">other</option>
       </select>         
                <label for="">Address </label>
                <textarea name="address"></textarea>
                <input type="submit">
        </form>
    </div>



</body>
</html>

