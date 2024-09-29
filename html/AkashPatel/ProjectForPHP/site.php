<?php
   session_start();
   $name = $_SESSION['name'];
   $mob = $_SESSION['mobilenumber'];
   $img = $_SESSION['img'];
   $address = $_SESSION['address'];

   if(isset($_GET['logout'])){
      session_destroy();
      header("location:registration.php");
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="vote.css">
</head>
<body>
    <div class="container">
        <button><a href="LoginPage.php">Back</a></button>
        <h1>Online Voting System</h1>
        <button><a href="?logout=1">Logout</a></button>
    </div>
    <div class="box">
        <div class="box1">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTOa2eeXpyaKIfZR4har1s26ngTaWE4snb7noaBJk4plg&" alt="">
            <div class="profile">
                <label for="">Name :</label>
                <p><?php
                       
                       echo $name ;

                ?></p>
                <br>
                <label for="">Mobile No:</label>
                <p><?php
                       
                       echo $mob ;

                ?></p>
                <br>
                <label for="">Address:</label>
                <p><?php
                       
                       echo $address ;

                ?></p>
                <br>
            </div>
        </div>
        <div class="box2">
            <h1>Voters</h1>
            <?php
                  $conn = mysqli_connect("localhost","root","toor","Akash");
                  $sql = "SELECT `id`, `name`, `mobilenumber`, `password`, `address`, `photo` FROM `voting`";
                  
                  $query = mysqli_query($conn,$sql);

                  if($query){
                    if(mysqli_num_rows($query)>0){
                        $data = mysqli_fetch_assoc($query);
                        $name = $data['name'];
                        for($i=1; $i<(mysqli_num_rows($query)); $i++){
                            
                            ?>
                            <div class="cnd">
                                <div class="cnd1">
                                    
                                    <label for="">Name :</label>
                                    <p><?php echo mysqli_fetch_assoc($query)['name'];  ?></p>
                                    <br><br>
                                    <p class="votes">Voted</p>
                            <br>
                            </div>
                            <img src="<?php echo $data['photo']; ?>" alt="">
                            </div>
                                    <?php
                            
                            
                        }
                    }
                  }else
            ?>
        </div>
    </div>

</body>
</html>