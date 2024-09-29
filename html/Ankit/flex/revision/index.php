 <?php   


if($_SERVER['REQUEST_METHOD']=="POST"){
    if(isset($_POST['firstname']) && !empty($_POST['firstname'])){
    $firstname=$_POST['firstname'];

      if(isset($_POST['lastname']) && !empty($_POST['lastname'])){
        $lastname=$_POST['lastname'];
        // $lastname=$_POST(['lastname']);


        if(isset($_POST['gender']) && !empty($_POST['gender'])){
            $gender=$_POST['gender'];


            if(isset($_POST['mob']) && !empty($_POST['mob'])){
                $mob=$_POST['mob'];


                if(isset($_POST['email']) && !empty($_POST['email'])){
                    $email=$_POST['email'];


                    if(isset($_POST['password']) && !empty($_POST['password'])){
                        $password=$_POST['password'];

                        $save= $firstname .":" . $lastname .":" .$gender . ":" . $mob . ":" . $email . ":" . $password;

                        $open=fopen("save.txt","a");
                        fwrite($open ,$save."\n");
                        fclose($open);

                        $msg ="Rgistration Completed";
                    }
                    else{
                        echo "Please Enter Password";
                    }
                }
                else{
                    echo "Please Enter Email";
                }
                
            }
            else{
                echo "Please Enter Mobile No";
            }
        }


        else{
            echo "Please Choose Gender";
        }




    }
    else{
        echo"Please Enter Last Name ";
    }
    
   } 
   else{
    echo "Please Enter  Name";
   }
}

 ?>
 
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-image:url(https://img.freepik.com/free-vector/gradient-mountain-landscape_23-2149162009.jpg?size=626&ext=jpg&ga=GA1.1.1314780943.1711929600&semt=ais);
            /* background-repeat:no-repeat; */
            background-size:cover:
            height:100vw;
            width:100vw;
            background-color:black;
            background-blend-mode:overlay;
            background-color:rgba(0,0,0,.8);
            
            
           
            
        }
        form{
            margin:50px auto;
            border:5px solid none;
            width:350px;
            height: 600px;
            border-radius:30px 0px 30px 0px;
            padding:40px;
            box-shadow:5px 5px 5px black;
            background-image:url(https://cdn.pixabay.com/photo/2016/03/22/15/29/blue-1273089_1280.jpg);
            background-size:cover;
            background-repeat:no-repeat;

            
        }
        label{
            font-family:cursive;
        }
        input{
            width:220px;
            padding:5px;
            font-family:cursive;
            box-shadow:5px 5px 5px black;
            margin-top:20px;
            
            border-radius:5px;
        }

        #submit:hover{
            background-color:green;
            transform:scale(1.1);
        }
        #submit{
            background-color:gray;
            cursor: pointer;
            margin-top:35px;
            margin:30px 0px 0px 70px;
            transition:all 0.3 linear;
        }
        a:hover{
            background-color:orangered;
            /* transform:scale(1.1); */
            
        }
        a{
            border:1px solid white;
            padding:8px;
            transition:all 0.3s linear;
            margin-top:10px;
            margin-left:150px;
            width:200px;
            text-decoration:none;
            color:black;
            font-family:cursive;
            box-shadow:5px 5px 5px black;
            background-color:gray;
            border-radius:8px;

        }
        h1{
            text-align:center;
            font-family:cursive;
            text-decoration:underline;
        }
    </style>
 </head>
 <body>
    <form action="" method="POST">
        <?php
        $msg="";
        ?>
        <h1>Signup</h1>
        <Label> First Name :</Label>
        <input type="text" name="firstname" placeholder="First Name.."><br><br>

        <label>Last Name :</label>
        <input type="text" name="lastname" placeholder="Last Name.."><br><br>

        <label>Gender  :</label>
        <select name="gender" placeholder="Gender..">
            <option value="choose">choose</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="Others">Others</option>
        </select><br><br>

        <label>Phone No :</label>
        <input type="number" name="mob" placeholder="Mobile No..">
        <br><br>

        <label>email :</label>
        <input type="email" name="email" placeholder="Email.."><br><br>


        <label>Password :</label>
        <input type="password" name="password" placeholder="Password..">
        <input type="Submit" id="submit"> <BR><BR>
        <a href="login.php">Login</a>
    </form>
            
         
       
       
 </body>
 </html>