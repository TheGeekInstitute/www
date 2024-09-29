<?php
require("db.php");
session_start();
$data="";
if(isset($_SESSION['login']) && isset($_GET['id'])){
    $id=$_GET['id'];
    $sql="SELECT * FROM `blog` WHERE `id`='$id'";
    $query=mysqli_query($conn,$sql);
    $data=mysqli_fetch_assoc($query);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Post</title>
</head>
<body>
    <form action="" method="post">
        Title : <input type="text" value="<?php echo $data['heading']; ?>" name="title" placeholder="Enter your title">
        <br><br>
        <textarea name="post" id="" cols="30" rows="10" placeholder="Enter your content"><?php echo $data['post']; ?></textarea>
        <br><br>
        <!-- <input type="submit" name="" id=""> -->
        <input type="submit" name="edit" value="edit">
    </form>
</body>
</html>
<?php
if(isset($_POST['title']) && isset($_POST['post'])){
    $title=$_POST['title'];
    $post=$_POST['post'];
$sql="UPDATE `blog` SET `heading`='$title',`post`='$post' WHERE `id`='$id'";
$query=mysqli_query($conn,$sql);

if($query){
    echo "Post Has Been Updated";
}

}


?>