<?php
require("filter.php");
require("db.php");
$msg="";
session_start();
session_regenerate_id();

if(isset($_SESSION['is_login']) && $_SESSION['is_login']==true && isset($_SESSION['username'])){

    $username=$_SESSION['username'];

}
else{
    header("location:index.php");
    session_destroy();
    die();
}


if($_SERVER['REQUEST_METHOD']=="POST"){
    if(isset($_POST['amount']) && !empty($_POST['amount'])){
        $amount=$_POST['amount'];

        if(isset($_POST['upi']) && !empty($_POST['upi'])){
            $upi=$_POST['upi'];
            $payment_id=bin2hex(random_bytes(15));
            $sql="INSERT INTO `payments`(`payment_id`,`upi`, `amt`, `created_by`) VALUES (?,?,?,?)";
            $stmt=mysqli_prepare($conn,$sql);
            $stmt->bind_param("ssss",$payment_id,$upi,$amount,$username);
            $stmt->execute();
            $stmt->store_result();
           

        }
        else{
            echo '
            <script>
                alert("Enter UPI Address");
            </script>
            ';
        }

    }
    else{
        echo '
        <script>
            alert("Enter Amount");
        </script>
        ';
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Link Creator</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            text-decoration: none;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;

        }

        .container{
            border: 2px solid royalblue;
            border-radius: 5px;
            margin: 50px auto;
            width: 400px;
            padding: 10px;
            height: 75vh;

        }

        .container fieldset{
            margin: 10px;
            font-size: x-large;
            padding: 5px;
            border: 2px solid royalblue;
        }

        .container > a{
            color: white;
            font-size: x-large;
            background-color: royalblue;
            display: block;
            width: 150px;
            margin: -25px auto 10px auto;
            height: 50px;
            text-align: center;
            border-radius: 3px;
            line-height: 50px;
            cursor: pointer;
            transition: all .2s linear;
            padding: 0 2px;
        }

        .container > a:hover{
            background-color: blue;
        }

        .container form{
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }

        .container form label{
            width: 90%;
            margin-top: 10px;
            margin-bottom: 5px;
        }

        .container form input{
            height: 45px;
            width: 90%;
            border: 1px solid black;
            border-radius: 3px;
            border-width: 1px 1px 3px 1px;
            font-size: large;
            padding: 2px 5px;
            margin-bottom: 10px;
        }

        .container form input[type="submit"]{
            background-color: royalblue;
            color: white;
            width: 150px;
            transition: all .2s linear;
            cursor: pointer;
        }

        .container form input[type="submit"]:hover{
            background-color: blue;
        }

        .container .link p{
            font-size: large;
            text-align: center;
            margin: 5px 0;
        }

        .container .link a{
            display: block;
            text-align: center;
            font-size: large;
            cursor: pointer;
        }

    </style>
</head>
<body>
    
    <div class="container">
        <a href="records.php">Se All Records</a>

        <fieldset>
            <legend>Payment</legend>
            <form action="" method="POST">
                <label for="">Amount (₹)</label>
                <input type="number" name="amount" placeholder="Enter Amount">
                <label for="">UPI ID</label>
                <input type="text" name="upi" placeholder="Enter UPI ID Here">

                <input type="submit" value="Generate Link">
            </form>
        </fieldset>


        <div class="link">
            <p>Generated Link : ↓</p> <a href="#">https://abcd/abcd/23482783467826478354437589378</a>
        </div>


    </div>

</body>
</html>