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
            text-align: center;
            margin: 1.5rem;
            font-family: cursive;
        }

        form{
            display: flex;
            justify-content: space-around;
            align-items: center;
            flex-direction: column;
        }

        form input{
            margin: 1rem 0;
        }

        form input[type="text"]{
            width: 60%;
            padding: .2rem 1rem;
            border: 1px solid gray;
            outline: transparent;
            height: 2rem;
            font-weight: 900;
        }

        form input[type="submit"]{
            border: none;
            outline: none;
            background-color: royalblue;
            padding: 5px;
            height: 2rem;
            width: 4rem;
            color:whitesmoke;
            font-weight: 900;
            border-radius: 5px;
            cursor: pointer;
            transition: all .2s;
        }
        form input[type="submit"]:active{
            transform: scale(0.9);
        }


    </style>
</head>
<body>

    <h1>Write a Blog</h1>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" enctype="multipart/form-data">
        <input type="text" name="title" placeholder="Write a Title for Blog Post">
        <input type="file" name="poster">
        <textarea name="editor" id="editor" cols="10" rows="10"></textarea>
        <input type="submit" value="Publish">
    </form>
        
        <script src="https://cdn.ckeditor.com/4.11.1/standard/ckeditor.js"></script>
        
        <script>
            window.onload = function() {
            CKEDITOR.replace('editor');
        };
    </script>


<?php
require "db.php";
if($_SERVER['REQUEST_METHOD']=="POST"){

    if(isset($_POST['title']) && !empty($_POST['title']) && isset($_FILES['poster']) && $_FILES['poster']['size']>0 && isset($_POST['editor']) && !empty($_POST['editor'])){
        $title=$_POST['title'];
        $poster=$_FILES['poster'];
        $content=$_POST['editor'];
        $img_ext=array("png","jpg","jpeg","bmp","gif","webp");
        $ext = pathinfo($poster['name'],PATHINFO_EXTENSION);
        $tmp_name=$poster['tmp_name'];
        $dest="images/". bin2hex(random_bytes(10)).".".$ext;

        if(in_array($ext,$img_ext)){
            $upload=move_uploaded_file($tmp_name,$dest);
            $sql="INSERT INTO `blog`(`poster`, `title`, `content`) VALUES ('$dest','$title','$content')";

            if(mysqli_query($conn,$sql) && $upload){
                echo "Content Published";
            }
            else{
                echo "Failed";
            }
        }
        else{
            echo "Invalid Image Format";
        }

    }
}


?>

</body>
</html>