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
        body{
            background-color: gray;
        }
        .heading{
            /* border: 2px solid red; */
            width: 27rem;
            margin: auto;
            margin-top: 2rem;
            color: white;
            text-shadow: 0 0 10px black;
        }
        form{
            border: 2px solid  red;
            width: 20rem;
            padding: 10px;
            margin: auto;
            text-align: center;
            margin-top: 5rem;
            border: none;
            box-shadow: 0 0 5px gray;
            background-color: pink;
        }
        form  h2{
            font-size: 40px;
            color: red;
        }
        form input{
            width: 80%;
            height: 2rem;
            border-bottom: 2px dashed black;
            border-radius: 4px;
            outline: none;
            border-top: none;
            padding-left: 4px;
            box-shadow: 0 -2px 5px pink;
        }

        form select{
            width: 60%;
            height: 2rem;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
    <div class="heading">
        <h1>ONLINE VOTING STYSTEM</h1>
    </div>
    <form method="POST">
        <h2>Login</h2>
        <br>
        <h3>
             <?php
             session_start();
                 if($_SERVER['REQUEST_METHOD']=="POST"){
                      if(isset($_POST['name']) && !empty($_POST['name'])){
                        $name = $_POST['name'];
                        if(isset($_POST['password']) && !empty($_POST['password'])){
                            $password = $_POST['password'];

                            $conn = mysqli_connect("localhost","root","toor","Akash");
                            $select = ("SELECT `id`, `name`, `mobilenumber`, `password`, `address`, `photo` FROM `voting` WHERE `name`='$name'");

                            $query = mysqli_query($conn,$select);

                            if($query){
                                if(mysqli_num_rows($query)){
                                    $data = mysqli_fetch_assoc($query);

                                    if($data['password']==$password){
                                        $_SESSION['name'] = $data['name'];
                                        $_SESSION['img'] = $data['photo'];
                                        $_SESSION['mobilenumber'] = $data['mobilenumber'];
                                        $_SESSION['address'] = $data['address'];
                                        header("location:site.php");
                                    }else{
                                        echo "Something is wrong in password";
                                    }
                                 }else{
                                    echo "There is something error";
                                }
                            }else{
                                echo "it's not working";
                            }
                        }else{
                            echo "please correct password";
                        }
                      }else{
                        echo "Please enter your name";
                      }
                 }
             ?>
        </h3>
        <br>
        <input type="text" name="name" placeholder="Enter your name">
        <br><br>
        <input type="password" name="password" placeholder="password">
        <br><br>
        <label for="">Role :</label>
        <select name="select">
            <option value="1">Other</option>
            <option value="2">Voter</option>
            <option value="3">Group</option>
        </select>
        <br><br>
        <input type="submit" value="Login" >
        <br><br>
        <div class="register">
            New user?<a href="registration.php">Register here</a>
        </div>
    </form>
    </div>
</script>
</body>
</html>