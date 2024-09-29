
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
   

    <header class="header">
		<h1 class="logo"><a href="#">Art1cle</a></h1>
      <ul class="main-nav">
          <li><a href="#"><input type="text" name="search" id="search"><img src="images/search.svg" width="20px" height="20px" alt="search"></a></li>
          <li><a href="#">Trend</a></li>
          <li><a href="#">Explore</a></li>
      </ul>
	</header> 

    <div class="articles-section">
<?php
require("db.php");
$sql="SELECT * FROM `blog`;";
$query=mysqli_query($conn,$sql);
if(mysqli_num_rows($query)>0){
    while($data=mysqli_fetch_assoc($query)){
        echo'
        <a href="./article.php?id='.$data['id'].'">
        <div class="article">
            <div class="content">
                <img src="./'. $data['image'] .'" alt="">
                <div class="info">
                    <div class="show">
                        <label for="date" class="date">'. $data['datetime'] .'</label>
                        <span>•</span>
                        <label for="views">'. $data['views'] .'</label>
                    </div>
                    <h3 class="title"> '. substr_replace($data['heading'],"....",43) .'</h3>
                    </div>
                    </div>
                    </div>
                    </a>
                    ';
                }    
            }
            else{
                echo "0 Records Found";
            }
            
            
            
            ?>

</div>
     <!-- <div class="articles-section">

        <div class="article">
            <div class="content">
                <img src="images/1.jpeg" alt="">
                <div class="info">
                    <div class="show">
                        <label for="date" class="date">Jul 29, 2022 09:04 PM</label>
                        <span>•</span>
                        <label for="views">100K</label>
                    </div>
                    <h3 class="title">Lorem ipsum dolor sit amet consectetur adipisicing elit</h3>
                </div>
            </div>
        </div> -->
<!-- 
    <footer class="footer">
        <p>THIS_IS_FOOTER</p>
    </footer> -->

</body>
</html>