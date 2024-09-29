<?php
$conn=mysqli_connect("localhost","root","toor","school");
if($_SERVER['REQUEST_METHOD']=="POST"){
  if(!empty($_POST['name'])){
    $name=$_POST['name'];

    if(!empty($_FILES['image'])  && $_FILES['image']['size']>0){
      $image=$_FILES['image'];
      $size=$_FILES['image']['size']/(1024*1024);
      $ext=pathinfo($_FILES['image']['name'],PATHINFO_EXTENSION);
      $tmp=$_FILES['image']['tmp_name'];
      $path="uploads/". $name . "." . $ext;
      $sql="INSERT INTO `images`(`name`, `image`) VALUES ('$name','$path')";

      if($ext=="jpg" || $ext == "png" || $ext =="jpeg" || $ext=="webp"){
        if($size<=5){
          if(move_uploaded_file($tmp,$path) && mysqli_query($conn,$sql)){
            echo '
            <script>
              alert("Image Uploaded");
            </script>
            ';
          }
          else{
            echo '
            <script>
              alert("Can Not Upload Image");
            </script>
            ';
          }
        }
        else{
          echo '
          <script>
            alert("Image size should not be >5");
          </script>
          ';
        }
      }
      else{
        echo '
        <script>
          alert("Invalid Image");
        </script>
        ';
      }
      
      
    }
    else{
      echo '
      <script>
        alert("Please Choose a Image");
      </script>
      ';
    }
  }
  else{
    echo '
    <script>
      alert("Please Enter Name");
    </script>
    ';
  }
}




?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
      table,tr,th,td{
        border:1px solid black;
        border-collapse: collapse;
        padding: 3px;
        text-align: center;
      }
      img{
        height: 35px;
        width: 50px;
      }
      th{
        background-color: #cccc;
      }
    </style>
</head>
<body>

<form action="19.php" method="POST" enctype="multipart/form-data">
    Name <input type="text" name="name"> <br><br>
    Image <input type="file" name="image" accept="image/*"> <br><br> 
    <input type="submit" value="upload">
<hr>
    <table>
    <tr>
        <th>Sr. No.</th>
        <th>Name</th>
        <th>Image</th>
        <th>Action</th>
    </tr>
<?php
$sql="SELECT * FROM `images`";
$query=mysqli_query($conn,$sql);
$i=1;
while($data=mysqli_fetch_assoc($query)){
  echo '
  <tr>
  <td>'.$i.'</td>
  <td>'.$data['name'].'</td>
  <td><img src="./'.$data['image'].'"></td>
  <td><a href="./'.$data['image'].'" target="_blank">View</a>/<a href="./19.php?del='.$data['sr_no'].'">Delete</a></td>
</tr>
  ';
  $i++;
}
if(isset($_GET['del'])){
  $sr_no=$_GET['del'];
  $sql="DELETE FROM `images` WHERE `sr_no`='$sr_no'";
  $query=mysqli_query($conn,$sql);
}
?> 
  </table>
</form>

    
</body>
</html>