<?php 
$data="";
require("db.php");
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $sql="SELECT * FROM `blog` WHERE `id`='$id';";
    $query=mysqli_query($conn,$sql);
    if(mysqli_num_rows($query)>0){
        $data=mysqli_fetch_assoc($query);
    }
    else{
        header("location:index.php");
    }
}
else{
    header("location:index.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="script/style.css">
    <title>Art1cle | Get Latest Articles</title>
</head>

<body>
    <!-- <label for="trending" class="lable">#TrendsNow</label> -->

    <header class="header">
		<h1 class="logo"><a href="#">Art1cle</a></h1>
      <ul class="main-nav">
          <li><a href="#"><input type="text" name="search" id="search"><img src="images/search.svg" width="20px" height="20px" alt="search"></a></li>
          <li><a href="#">Trend</a></li>
          <li><a href="#">Explore</a></li>
      </ul>
	</header> 
<div class="get">
    <h4>Home <span>>> <h4>Articles <span>>> <h4><?php echo substr($data['heading'],0,60); ?> </h4></span></h4></span></h4>
</div>
    <div class="article-open">
        <div class="article-head">
            <div class="article-head-info">
                <h1><?php echo $data['heading']; ?></h1>
                <hr>
                <label for="date" class="date"><?php echo $data['datetime']; ?></label>
                <span>•</span>
                <label for="views"><?php echo $data['views']; ?></label>
            </div>
        </div>
        <div class="article-open-data">
            <img src="./<?php echo $data['image']; ?>" alt="">
            <p class="data">
            <?php 
            $a=0;
            $content=str_split($data['content']);
            $num=count($content);
            for($a;$num>$a;$a++){
                echo $content[$a];
                if($content[$a]=="."){
                    echo "<br><br>";
                }
            }            
            ?></p> 
        </div>
    </div>
</body>
</html>


