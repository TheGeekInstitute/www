<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <form method="POST">
            <label for="">Name :</label>
            <input type="text" name="name" id="">
            <br><br>
            <label for="">Email :</label>
            <input type="text" name="email" id="">
            <br><br>
            <label for="">Password :</label>
            <input type="password" name="password" id="">
            <br><br>
            <input type="submit" name="Name" id="">
            <br><br>
        </form>
        <?php
             if($_SERVER['REQUEST_METHOD']== "POST"){
                if(isset($_POST['name']) && !empty($_POST['name'])){

                    $name = $_POST['name'];

                    if(isset($_POST['email']) && !empty($_POST['email'])){
                        $email = $_POST['email'];
                        

                        if(isset($_POST['password']) && !empty($_POST['password'])){
                            $pass = $_POST['password'];

                            $conn = mysqli_connect("localhost","root","toor","Akash");
                            $sql = "INSERT INTO `empdb`(`name`, `email`, `password`) VALUES ('$name','$email','$pass')";
                            $query = mysqli_query($conn,$sql);
                            if($query){
                                echo "form inserted";
                            }else{
                                echo "form not found";
                            }
                        }else{
                            echo "plz enter you password";
                        }
                    }else{
                        echo "plz enter you email";
                    }
                }else{
                    echo "plz enter your name";
                }
             }
        ?>
    </div>
    <div class="table">
        <table>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
            </tr>


            <?php
                $conn = mysqli_connect("localhost","root","toor","Akash");
                $sql ="SELECT `id`, `name`, `email`, `password` FROM `empdb`";

                $query = mysqli_query($conn,$sql);

                // if($)

            ?>
        </table>
    </div>
</body>
</html>