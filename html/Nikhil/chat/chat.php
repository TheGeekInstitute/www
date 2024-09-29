<?php
$conn=mysqli_connect("localhost","root","toor","chat");
session_start();
if(isset($_SESSION['email']) && isset($_SESSION['fullname']) && isset($_SESSION['username']) && isset($_SESSION['photo'])){
    $username=$_SESSION['username'];
    $fullname=$_SESSION['fullname'];
    $email=$_SESSION['email'];
    $photo=$_SESSION['photo'];
    // echo $fullname;
}
else{
    session_destroy();
    header("location:login.php");
}


if($_SERVER['REQUEST_METHOD']=="POST"){
    if(isset($_POST['message']) && !empty($_POST['message'])){
        $message=$_POST['message'];

       
        $sql="INSERT INTO `chat`(`username`, `message`, `photo`) VALUES ('$username','$message','$photo')";
        $query=mysqli_query($conn,$sql);
        if($query){
            header("location:chat.php");
        }
    }
}


if(isset($_GET['logout'])){
    session_destroy();
    header("location:login.php");
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>chat</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./chat.css">
    <style>
       



      

    </style>
</head>
<body>
    <div class="box">
        <div class="nav">
            <div class="left">
            <div class="img">
                <img src="<?php echo $_SESSION['photo'] ; ?>" alt="XYZ">
            </div>
            <div class="name">
                <p><?php echo $fullname; ?></p>
            </div>
        </div>
        <div class="right">
           <a href="?logout=1">Log Out</a>
        </div>
        </div>

        <div class="main">
        
        <?php
        $sql="SELECT `chat_id`, `username`, `message`,`photo` , `time` FROM `chat`";
        $query=mysqli_query($conn,$sql);
        if($query){
            while($data=mysqli_fetch_assoc($query)){
                if($data['username']==$username){
                    echo '
                    <div class="chat1">
                    <img src="'.$data['photo'].'" alt="tyu">
                    <h1>'.$data['username'].'</h1>
                    <p>'.$data['message'].'</p>
                    </div>
                    ';
                }
                else{
                    echo '
                    <div class="chat">
                    <img src="'.$data['photo'].'" alt="tyu">
                    <h1>'.$data['username'].'</h1>
                    <p>'.$data['message'].'</p>
                    </div>
                    ';
                }
            }
        }

        ?>
        </div>
        
        <div class="text">
            <form action="" method="post">
            <input type="text" name="message">
            <button type="submit"><ion-icon name="send-outline"></ion-icon></button>
            </form>
        </div>
        <div class="blank">

        </div>

    </div>






    

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>