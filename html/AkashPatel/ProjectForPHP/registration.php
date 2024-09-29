
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
        .Online{
            /* border: 2px solid red; */
            width: 24rem;
            font-size: 38px;
            margin: auto;
            margin-top: 2rem;
            color: white;
            text-shadow: 0 0 10px black;
        }
        form{
            /* border: 2px solid red; */
            text-align: center;
            width: 30rem;
            margin: auto;
            margin-top: 2rem;
            border-radius: 4px;
            box-shadow: 0 0 4px gray;
            background-color: pink;
        }
        form input{
            border: 2px dashed black;
            width: 13rem;
            height: 2rem;
            border-radius: 5px;
            border-top: none;
            box-shadow: 0 -2px 2px gray;
            
        }
        form h1{
            margin-bottom: 20px;
            color: green;
        }
        .file{
            padding: 5px 0 0 1rem;
        }
    </style>

</head>
<body>
    <h1 class="Online">Online Voting Machine</h1>
    <form  enctype="multipart/form-data" method="POST">
        <h1>Registration</h1>
        <h2>
            <?php
                if($_SERVER['REQUEST_METHOD']=='POST'){
                    if(isset($_POST['name']) && !empty($_POST['name'])){
                        $name = $_POST['name'];
                        
                        if(isset($_POST['mobile']) && !empty($_POST['mobile'])){
                            $mobile = $_POST['mobile'];

                            if(isset($_POST['password']) && !empty($_POST['password'])){
                                $pass = $_POST['password'];

                                if(isset($_POST['cpass']) && !empty($_POST['cpass'])){
                                    $cpass = $_POST['cpass'];

                                    if($pass == $cpass){
                                        
                                        if(isset($_POST['address']) && !empty($_POST['address'])){

                                            $addr = $_POST['address'];

                                            if(isset($_POST['role']) && !empty($_POST['role'])){
                                                $role = $_POST['role'];

                                                if(isset($_FILES['photo'])){
                                                    $image = $_FILES['photo']['name'];
                                                    $tmp_name = $_FILES['photo']['tmp_name'];
                                                    $dest="upload-images/".$image;
                                                    move_uploaded_file($tmp_name,$dest);
     
                                                   
                                                    $conn = mysqli_connect("localhost","root","toor","Akash");
                                                    $insert = "INSERT INTO `voting`(`name`, `mobilenumber`, `password`, `address`, `photo`) VALUES ('$name','$mobile','$pass','$addr','$dest')";

                                                    $query = mysqli_query($conn,$insert);

                                                    if($query){
                                                        echo "Registration Successful";

                                                        header("location:LoginPage.php");
                                                    }else{
                                                        echo " Registration not successful";
                                                    }


                                                }
                                                else{
                                                    echo "plz enter your image";
                                                }
                                            }else{
                                                echo "plz enter your role";
                                            }
                                        }else{
                                            echo "plz enter your address";
                                        }
                                    }else{
                                        echo "your password is nots same";
                                    }
                                }else{
                                    echo "plz confirm your password";
                                }
                            }else{
                                echo "plz enter your password";
                            }
                        }else{
                            echo "plz enter your mibile number";
                        }
                    }else{
                        echo "plz enter your name";
                    }
                }
            ?>
        </h2>
        <input type="text" name="name" placeholder="Enter name">
        <input type="number" name="mobile" placeholder="Enter mobile number">
        <br><br>
        <input type="password" name="password" placeholder="Enter password">
        
        <input type="text" name="cpass" placeholder="Confirm fassword">
        <br><br>
        <input type="address" name="address" placeholder="Address" class="addre">
        <br>
        <div class="Upload">
            <label for="">Select Role :</label>
            <select name="role" class="voter">
                <option value="select">Select</option>
                <option value="voter">Voter</option>
                <option value="group">Group</option>
            </select>
        </div>
        <br>    
        <div class="Upload">             
           <label for="">Upload image :</label>
           <input type="file" name="photo" class="file">
        </div>
        <br>
        <div class="Upload">
            <input type="submit" name="submit">
        </div>
        <br><br>
        <label for="" class="color">Already user? </label>
        <a href="LoginPage.php">Login here</a>
    </form>
</body>
</html>