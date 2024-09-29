<?php
// if(!isset($_SESSION['login']) && $_SESSION['login']!=true){
//     header("location:login.php");
// }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Post</title>
</head>
<body>
    <form action="" method="post">
        Title : <input type="text" name="title" placeholder="Enter your title">
        <br><br>
        <textarea name="post" id="" cols="30" rows="10" placeholder="Enter your content"></textarea>
        <br><br>
        <input type="submit" name="" id="">
        <input type="submit" name="edit" value="edit">
    </form>
</body>
</html>
<?php
require("db.php");

if(isset($_POST['title']) && isset($_POST['post'])){
    $title=$_POST['title'];
    $post=$_POST['post'];
$sql="INSERT INTO `blog`(`heading`, `post`) VALUES ('$title','$post')";
$query=mysqli_query($conn,$sql);

if($query){
    echo "Post Has Been Published";
}

}

?>