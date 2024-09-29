<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        h1{
            color: blue;
            text-align: center;
            margin: 20px;
        }

        form input[type="text"]{
            outline: transparent;
            width: 90%;
            display: block;
            margin: auto;
            margin: 10px auto;
            padding: 5px;
        }

        form input[type="submit"]{
            display: block;
            margin: 20px auto;
            padding: 5px;
            background-color: blue;
            border: none;
            color: white;
            font-weight: 900;
            height: 30px;
            width: 80px;
            border-radius: 5px;
        }
        p{
            text-align:center;
        }
        
    </style>
</head>
<body>

<?php
session_start();

if(isset($_POST['title']) && !empty($_POST['title'])){
    $_SESSION['title']=$_POST['title'];
}
else{
    $_SESSION['title']="";
}


if(isset($_POST['editor']) && !empty($_POST['editor'])){
    $_SESSION['content']=$_POST['editor'];
}
else{
    $_SESSION['content']="";
}
?>


    <h1>Write a Blog</h1>
<form method="post">

    <input type="text" name="title" placeholder="Blog Title" value="<?php echo $_SESSION['title']; ?>">
    <textarea name="editor" id="editor" cols="30" rows="10"><?php echo $_SESSION['content']; ?></textarea>
    
    <input type="submit" value="Publish">
</form>


    <script src="https://cdn.ckeditor.com/4.11.1/standard/ckeditor.js"></script>
    <script>
        window.onload = function() {
            CKEDITOR.replace('editor');
        };
    </script>
    
 <?php
 $conn=mysqli_connect("localhost","root","toor","Ritu");
 $msg=$color=$title=$content="";
 $error=false  ;
if($_SERVER['REQUEST_METHOD']=="POST"){

    if(isset($_POST['title']) && !empty($_POST['title']) && isset($_POST['editor']) && !empty($_POST['editor'])){
        $title=$_POST['title'];
        $content=$_POST['editor'];
        $sql="INSERT INTO `blog`(`title`, `content`) VALUES ('$title','$content');";
        $query=mysqli_query($conn,$sql);
        if($query){
            $error=true;
            $color="green";
            $msg="Content Published";

            unset($_SESSION['title']);
            unset($_SESSION['content']);
        }
        else{
            $error=true;
            $color="red";
            $msg="Server Busy | Error";
        }
    }
    else{
        $error=true;
        $color="red";
        $msg="Please Fill out All the Fields";
    }

}

if($error){
    echo '
    <p style="color:'.$color.';">'.$msg.'</p>
    ';
}

 ?>





</body>
</html>