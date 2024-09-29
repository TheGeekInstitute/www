<?php
$conn=mysqli_connect("localhost","root","toor","Dhruv");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .cont{
            border: 2px solid red;
            /* display: block; */
            height: 400px;
            display: block;

        }

        .form{
            align-items: center;
            justify-content: center;
        }
    </style>

</head>

<body>
    <div class="cont">
    <form action="" method="post" enctype="multipart/form-data">
        <input type="text" name="text" id="text">
        <br>
        <textarea name="pera"></textarea>
        <br>
        <input type="submit" name="Save" id="">

    </form>
</div>
    <h1></h1>
    
</body>
</html>

<?php
if($_SERVER['REQUEST_METHOD']=="POST"){

    if(isset($_POST['text']) && !empty($_POST['text'])){
        $text=$_POST['text'];

        
    if(isset($_POST['pera']) && !empty($_POST['pera'])){
        $pera=$_POST['pera'];

        $sql="INSERT INTO `Notepad`(`heading`, `pera`) VALUES ('$text','$pera')";

        $query=mysqli_query($conn,$sql);
        if($query){
            echo "hellow";



        }else{
            echo "not world";
        }

    }
 
    }
    else{
        echo "";
    }

    }



?>