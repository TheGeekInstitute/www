<?php
session_start();
$conn=mysqli_connect("localhost","root","toor","SANDEEP");
if(isset($_SESSION['username']) && isset($_SESSION['fullname'])){
    $username=$_SESSION['username'];
    $fullname=$_SESSION['fullname'];
}
else{
    session_destroy();
    header("location:login.php");
}


if(isset($_GET['logout'])){
    session_destroy();
    header("location:login.php");
}


if($_SERVER['REQUEST_METHOD']=="POST"){
    if(isset($_POST['msg']) && !empty($_POST['msg'])){
        $msg=$_POST['msg'];
        $sql="INSERT INTO `chat`(`username`, `chat`) VALUES ('$username','$msg')";
        $query=mysqli_query($conn,$sql);
        if($query){
            header("location:chat.php");
        }

    }
}




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat</title>
    <style>
        @import url("https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css");
        
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body{
            background-color: rgba(0, 0, 0, 0.2);
        }

        .container{
          
            height: 600px;
            width: 350px;
            position: absolute;
            top: calc(50% - 300px);
            left :calc(50% - 175px);
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0px 0px 10px black;
            border: 2px solid black;
        }

        .container .header{
            border: 2px solid black;
            height:60px;
            display: flex;
            align-items: center;
            justify-content: start;
            padding: 0 20px;
            background-color: black;
        }

        .container .header img{
            width:50px;
            height: 50px;
            border-radius: 50%;
            border:3px solid white;
        }

        .container .header p{
            font-size: large;
            font-weight: 700;
            margin-left: 10px;
            color: white;
        }

        .container .main{
       
            height: 480px;
            width: 350px;
            overflow:scroll;
            background-image: url("https://w0.peakpx.com/wallpaper/744/548/HD-wallpaper-whatsapp-ma-doodle-pattern-thumbnail.jpg");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        .container .chat{
            display:flex;
            align-items:start;
            justify-content: start;
            flex-direction: column;
  
        }

        .container .chat .msg{
       
            width:75%;
            margin: 10px 3px;
            padding: 10px;
            border-radius: 3px;
            background-color: green;
            display: flex;
            align-items: start;
            justify-content:start;
            flex-direction: column;
            color: white;
            transform: transalteY(-100%);
            
        }

        .container .chat .msg label,
        .container .chat .msg1 label
        {
            align-self: flex-end;
            font-size: small;
            margin-bottom: -7px;
            color:white;
        }

        .container .chat .name{
            font-size: small;
            font-weight: 700;
            color: black;
            margin-top:-7px;
            margin-bottom: 5px;
        }

        .container .chat .msg1{
            display: flex;
            align-items: start;
            justify-content:start;
            flex-direction: column;
            width:75%;
            margin: 10px 3px;
            padding: 10px;
            border-radius: 3px;
            align-self: end;
            background-color: grey;
            color: white;

        }

        .container .field{
            height: 60px;
 
            display: flex;
            align-items: center;
            justify-content: center;
            background-color:black;
            position: absolute;
            bottom:0px;
            z-index: 9999;
            width:100%;
        }

        .container .field input{
            outline: none;
            border: 1px solid black;
            height: 45px;
            width: 80%;
            border-radius: 1000px;
            padding: 2px 20px;
            font-size: large;
        }

        .container .field button{
            height: 40px;
            width: 40px;
            margin-left: 5px;
            border-radius: 50%;
            font-size: large;
            color:white;
            background-color:green;
            border: none;
            cursor: pointer;
        }


    </style>
</head>
<body>
    
    <div class="container">
        <div class="header">
            <img src="../../../web/images/11.jpg" alt="asd">
            <p><?php echo $fullname ; ?></p>

            <a href="?logout=1">Logout</a>
        </div>
    
    
        <div class="main">

            <div class="chat">
            
            <?php
                $sql="SELECT `chat_id`, `username`, `chat`, `time` FROM `chat`;";
                $query=mysqli_query($conn,$sql);
                if($query){
                    if(mysqli_num_rows($query)>0){
                        while($data=mysqli_fetch_assoc($query)){
                            if($username==$data['username']){
                                echo '
                            <div class="msg1">
                                <p class="name">'.$data['username'].'</p>
                                <p>'.$data['chat'].'</p>
                                <label for="">'.$data['time'].'</label>
                            </div>
                                ';
                            }
                            else{
                                echo '
                                <div class="msg">
                                    <p class="name">'.$data['username'].'</p>
                                    <p>'.$data['chat'].'</p>
                                    <label for="">'.$data['time'].'</label>
                                </div>
                                    ';   
                                    
                            }
                        }
                        
                    }
                    
                }

            ?>
            
            

                
        

        </div>

        <div class="field">
<form action="" method="post">
<input type="text" name="msg" placeholder="Enter Message">
           <button type="submit"><i class="fa-solid fa-paper-plane"></i></button>
</form>
        </div>

    </div>


</body>
</html>