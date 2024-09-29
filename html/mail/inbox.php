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


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>M3-Mail | Inbox</title>
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
                <label for="footer"><span><?php $name; ?></span></label>
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

                    <label for="type">Inbox</label>
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
<?php
$sql="SELECT `sr_no` , `mailed_from`, `subject`,`date` FROM `inbox` WHERE `email`=? ;";
$inbox_stmt=$conn->prepare($sql);
$inbox_stmt->bind_param("s",$email);
$inbox_stmt->bind_result($db_sr_no,$db_mailed_from,$dbsubject,$dbdate);
$inbox_stmt->execute();
$inbox_stmt->store_result();
if($inbox_stmt->num_rows>0){
while($inbox_stmt->fetch()){
    echo '
    <section>
    <input type="checkbox">
    <p class="from" onclick="mail('.$db_sr_no.')">from</p>
    <p class="by" onclick="mail('.$db_sr_no.')">'.$db_mailed_from.'</p>
    <p class="heading" onclick="mail('.$db_sr_no.')">'.substr($dbsubject,0,60)."...".'
    </p>
    <p class="date" onclick="mail('.$db_sr_no.')">'.$dbdate.'</p>
    <a href="inbox.php?del='.$db_sr_no.'">
        <i class="material-icons">delete</i>
    </a>
    </section>
    ';


}
$inbox_stmt->close();
}
else{
    echo '
    <section>
    <p class="heading">Inbox is Empty
    </p>
    </section>
    ';
}

//delete statement
if(isset($_GET['del']) && ctype_digit($_GET['del'])){
    $del_id=mysqli_real_escape_string($conn,input_filter($_GET['del']));
    $sql="DELETE FROM `inbox` WHERE `sr_no`=? AND `email`=?;";
    $del_stmt=$conn->prepare($sql);
    $del_stmt->bind_param("is",$db_sr_no,$email);
    $del_stmt->execute();
    $del_stmt->store_result();
    if($del_stmt->affected_rows==1){
        header("location:inbox.php");
    }
}




?>
                </div>
            </div>
        </div>

    </div>
</body>

</html>