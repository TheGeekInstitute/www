<?php
define("FILE_INCLUDE",true);
require "config/_filters.php";
require "config/_dbConfig.php";
require "config/_functions.php";
session_start();
session_regenerate_id();
$db_sr_no=$db_time=$db_content="";
$sql = "SELECT `sr_no`, `time`, `content` FROM `ReturnAndRefund` LIMIT 1";
$show_stmt=$connection->prepare($sql);
$show_stmt->bind_result($db_sr_no,$db_time,$db_content);
$show_stmt->execute();
$show_stmt->store_result();
if($show_stmt->num_rows==1){
    $show_stmt->fetch();
    $show_stmt->close();
}

date_default_timezone_set("Asia/Calcutta");
$date= date('d-m-Y H:i:s');
if($_SERVER['REQUEST_METHOD']=="POST"){
    if(isset($_POST['content']) && !empty($_POST['content'])){
    $content = mysqli_real_escape_string($connection,$_POST['content']);
    $sql="UPDATE `ReturnAndRefund` SET `time`='$date', `content`='$content'";
    $query = $connection->query($sql);
    
    if($query){
    
        echo '
        <script>
            alert("Terms and Conditions has Been Updated !");
            window.location.href="'.$_SERVER['PHP_SELF'].'";
        </script>
        ';
       
    }


    
}
}






?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>T&C Editor</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body{
            padding:5px;
        }

        .container{
            border: 2px solid black;
            
        }

        .container h1{
            text-align: center;
            margin: 1rem 0;
        }

        .container p{
            text-align: center;
            display: block;
            font-weight: 900;
            font-size: larger;
            margin: 1rem 0;

        }

        .container p span{
            color: red;
        }
        .container form .btn input{
            display: block;
            margin: 20px auto;
            background-color: royalblue;
            padding: 10px;
            border: none;
            outline: transparent;
            color: white;
            font-weight: 700;
            width: 10rem;
            border-radius: 3px;
            transition: all .2s;
            cursor: pointer;
        }

        .container form .btn input:active{
            transform: scale(.9) translateY(5px);
        }

        .container form .btn{
            display:flex;
            align-items:center;
            justify-content:center;
        }
        .container form .btn a{
            display: block;
            margin: 20px auto;
            background-color: green;
            padding: 10px;
            border: none;
            outline: transparent;
            color: white;
            font-weight: 700;
            width: 10rem;
            border-radius: 3px;
            transition: all .2s;
            cursor: pointer;
            text-decoration:none;
            text-align:center;
        }
     
    </style>
</head>
<body>


<?php

if(isset($_GET['view'])){
echo $db_content;
}
else{

    
    
    echo ' 
    <div class="container">
    <h1>Terms and Condition Editor</h1>
    <p>Last Updated : <span>'.$db_time.'</span></p>
    <form action="'.htmlspecialchars($_SERVER["PHP_SELF"]).'" method="post">
    <textarea id="tc" name="content">'.$db_content.'</textarea>
    <div class="btn">
    <input type="submit" name="update" value="SAVE">
    <input type="hidden" name="show">
    <a href="'.htmlspecialchars($_SERVER["PHP_SELF"]).'?view=true" target="_blank">Preview</a>
    </div>
    </form>
    </div>    
    ';
}





?>




    <script src="https://cdn.ckeditor.com/4.11.1/standard/ckeditor.js"></script>

    <script>
        window.onload = function() {
            CKEDITOR.replace('tc');
          

        };

        const colorContainer = document.querySelector('.colors-container');
        function showcolorContainer() {
            colorContainer.classList.add('active-color-container');

        }
    </script>
</body>
</html>


