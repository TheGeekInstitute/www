<?php
define('MAIL',true);
require('db.php');
session_start();

session_regenerate_id();
if(!isset($_SESSION['login'])==true){
    header("location:login.php");
}
$email=$_SESSION['email'];
$name=$_SESSION['name'];

if(isset($_GET['mail']) && ctype_digit($_GET['mail']) && !empty($_GET['mail'])){
    $mail_id=mysqli_real_escape_string($conn,input_filter($_GET['mail']));
    $sql="SELECT `email`, `mailed_from`, `subject`, `mail`, `date` FROM `inbox` WHERE `sr_no`=? AND `email`=?;";
    $mail_stmt=$conn->prepare($sql);
    $mail_stmt->bind_param("is",$mail_id,$email);
    $mail_stmt->bind_result($dbemail,$dbfrom,$dbsubject,$dbmail,$dbdate);
    $mail_stmt->execute();
    $mail_stmt->store_result();
    if($mail_stmt->num_rows>0){
        $mail_stmt->fetch();
        $mail_stmt->close();
    }
    else{
        header("location:inbox.php");
    }
    

}
else{
    header("location:inbox.php");
}



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>M3-Mail | M3-Mail</title>
    <link rel="shortcut icon" href="images/email.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
</head>

<body>
    <div class="m3-mail">

        <div class="side-bar" id="side-bar">
            <header>
                <img src="images/email.png" alt="">
                <label for="logo">M3-Mail</label>
            </header>
            <ul>
                <li class="active"><a href="inbox.html"><i class="material-icons">inbox</i>Inbox</a></li>
                <li><a href="sent.html"> <i class="material-icons">email</i>Sent</a></li>
                <li><a href="trash.html"> <i class="material-icons">delete</i>Trash</a></li>
                <li><a href="spam.html"> <i class="material-icons">delete_sweep</i>Spam</a></li>
            </ul>
            
            <footer>
                <label for="footer">Dev. <span>@GICS</span></label>
            </footer>
        </div>
        <div id="slide-open">
            <div class="slide-border" onclick="side_bar_open()">

                <i class="material-icons">chevron_right</i>
            </div>
        </div>
        <div id="slide-close">
            <div class="slide-border" onclick="side_bar_close()">

                <i class="material-icons">chevron_left</i>
            </div>
        </div>

        <div class="main-bar" id="main-bar">
            <div class="style" id="inbox">
                <div class="top">

                    <label for="type">Mail</label>
                    <div class="mailname">

                        <h3><?php echo $email; ?></h3>
                    </div>
                    <div class="search-bar">

                        <input type="text" placeholder="Search Mail Here">
                        <i class="material-icons">search</i>
                        <button onclick="logout()">LOGOUT</button>

                    </div>
                </div>

                <div class="inbox-content">
                   <div class="mail">
                       <div class="up">
                           <label for="from-to">from</label>
                           <p><?php echo $dbfrom; ?></p>
                       </div>
                       <div class="sub">
                           <h4><?php echo $dbsubject; ?></h4>
                       </div>
                       <div class="mail">
                           <p><?php echo $dbmail; ?></p>
                       </div>
                   </div>
                </div>
            </div>
        </div>

    </div>
</body>

</html>