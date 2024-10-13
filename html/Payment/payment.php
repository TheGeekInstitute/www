<?php
require("filter.php");
require("db.php");
$msg="";
$amt="0";
$upi="NULL";
session_start();
session_regenerate_id();
if(isset($_REQUEST['payment_id']) && !empty($_REQUEST['payment_id'])){
    $payment_id=input_filter($_REQUEST['payment_id']);
    $_SESSION['payment_id']=$payment_id;
    $sql="SELECT `upi`, `amt` FROM `payments` WHERE `payment_id`=?";
    $stmt=mysqli_prepare($conn,$sql);
    $stmt->bind_param("s",$payment_id);
    $stmt->bind_result($db_upi,$db_amt);
    $stmt->execute();
    $stmt->store_result();
    if($stmt->num_rows==1){
        $stmt->fetch();
        $amt=$db_amt;
        $upi=$db_upi;
        
    }
    else{
        echo '
        <script>
        alert("Invalid or Expired Link");
        window.location.href="index.php";
        </script>';
    }

}
else{
    header("location:index.php");
}


if($_SERVER['REQUEST_METHOD']=="POST"){
    if(isset($_POST['ref']) && !empty($_POST['ref'])){
        if(strlen($_POST['ref'])==12){
            $ref_no=input_filter($_POST['ref']);
            $status="Paid";
            $update_sql="UPDATE `payments` SET `ref`=?, `paid_status`=? WHERE `payment_id`=?";
            $update_stmt=$conn->prepare($sql);
            $update_stmt->bind_param("sss",$ref_no,$status,$payment_id);
            echo $payment_id;

        }
        else{
            echo '
            <script>
            alert("Incorrect Reference Number");
            </script>';
        }
        

    }
    else{
        echo '
        <script>
        alert("Please Enter Reference Number");
        </script>';
    }
}


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IndiPays</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            text-decoration: none;
        }

        .container {
            max-width: 410px;
            margin: auto;
        }

        .container .nav {
            height: 40px;
            margin: 1px 5px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 20px;

        }

        .container .nav p {
            font-size: x-large;
            font-weight: 900;
        }

        .container .nav a {
            color: blue;
            font-size: small;
        }

        .container .amt {
            box-sizing: 0px 3px 5px black;
            height: 100px;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            border-radius: 10px;
            margin: 10px 0;
            overflow: hidden;
            padding: 10px;
            background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAmwAAACjBAMAAADFml9eAAAAFVBMVEU4ifk4ifkHWv1qwPN0yvJRpvYugvpGJgo9AAAAAnRSTlMImTeZbNAAAAMoSURBVHja7djRbdtAEEXRtSsQXEIM6jvBsoAYYQf0VmBQ/ZcQJgZiy7Ekzl1JhpZ3SjiYt2/IlNLdNyc0m5RUi8/LH7cHHWLT5R8uW3i2OQ+bdC9EbMac83czGn3YZrX8lISIRnSeXrZ4ROeRLR5R2VBEZWMRlS146MpWEVHZSB/IxiIqG+kD2QLzmGWr6gPZUB/IhvpANtQHssFlk23ZZNmq+0A2cnzIRpdNNrRsssWPD9nQ8SEbXTbZ0LLJhpZNtlPzmGU7w2eVbHzZZEPLJhtaNtnQsskW/IaXjd5sssGXTTb0ssnGlk028rLJxpZNNrRssh2cLst25mWTDS2bbOHvKtmOzDbLdvZlky38XSUbO3VlY9eHbOj6kA0um2zg+pANXR+yoetDNnR9yMYKQTZUCLKhQpANFYJsqBBkQ4UgGyoE2VAhyMYyKlv0l5FsPKOygaNNNnS0ycYKQTZytMkGMyobyqhsKKOyoYzKhjIqG8qobCijsqGMyoYyKhvKqGwoo7KhjMr2bzrZyLzIRibLdumMyoYyKhs5P2RD54ds5BNBtoUZ7ef5Nbwb2Y6eH3tWsp0+Pw6ByXbo/Oj74dTItve0LRCTbf/8WEom29vTFiCT7XV20/MwyBaK524qpQyyhczK3xllC5vJFnrPytv0si1atPdmsi1ctPJh4hldHdv2PzTZwul8nWfZ4mjgalsT2yE02RAaedpWwnYEDT1t62DblWPTy/bpqpXjM8j2yUwn1EbZovmUja0abIS22bZlwfSyRQNKG6FltmmR2ijb4gu39mlrlm1bimyXU2ON0CjbcjXWCG2yBdRG2YCabEgNNkKDbCE12AgNshXZLvZtUFmkzbEF1UbZ4g8bboTW2Ipsl48oboS22KIRlQ1FFBdpU2zhiOIibYktHlHZUERxkTbE1sl2nYjyIm2HbSJsw9rZ0LLJhtTGtbNNsl0torxIG2GbZLvesvH7ow22ItuVvg9koxGtONtaYJuo2rhmNr5sNWwPq122CrandL/aZas4236mu5UeH1Vsm3TjKe0q2Cruj3Tj61a+gm1ettt2676CbVb7DX6RtCyA6JoYAAAAAElFTkSuQmCC");
        }

        .container .amt p:first-child {
            font-size: large;
            color: white;
            margin: 5px 10px;
        }

        .container .amt p:last-child {
            color: white;
            font-size: xx-large;
            font-weight: 900;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }

        .container label span {
            font-weight: 900;
        }


        .container .upi {
            font-size: x-large;
            font-weight: 400;
            margin: 20px 0;
            padding: 0 10px;
        }

        .container .payment .one {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }

        .container .payment label {
            padding: 10px 5px;
            width: 100%;
            margin: 5px 0;

        }

        .container .payment .field {
            width: 100%;
            padding: 0 5px;
            display: flex;
            align-items: center;
            justify-content: start;
        }

        .container .payment .field input {
            width: 80%;
            height: 40px;
            margin: 5px 0;
            font-size: large;
            padding: 3px 5px;
            border-radius: 3px;
            border: 1px solid grey;
        }

        .container .payment .field button {
            width: 20%;
            height: 40px;
            margin-left: 5px;
            background-color: green;
            border: none;
            border-radius: 3px;
            color: white;
            cursor: pointer;
            font-size: large;
            transition: all .2s linear;
        }

        .container .payment .field button:hover {
            background-color: rgb(4, 75, 4);
        }

        .container .payment .two {
            padding: 3px;
        }

        .container .payment .two label {
            display: block;
            font-size: large;
            margin-top: 10px;
        }


        .container .payment .methods {
            display: grid;
            grid-template-columns: auto auto;
            grid-template-rows: 50px 50px;
            gap: 5px;
        }

        .container .payment .methods a {
            border: 2px solid blue;
            display: block;
            padding: 5px;
            border-radius: 3px;
            display: flex;
            align-items: center;
            justify-content: space-between;

        }

        .container .payment .methods a i {
            font-size: x-large;
            color: grey;
            transition: all .2s linear;
        }

        .container .payment .methods a:hover i {
            color: black;
        }


        .container .payment .methods img {
            height: 50px;
        }

        .container .payment .methods a:nth-child(2) img {
            height: 70px;
        }

        .container .payment .methods a:nth-child(3) img {
            height: 25px;
        }


        .container .payment .methods a:nth-child(4) img {
            height: 25px;
        }


        .container .payment .three {
            margin-top: 5px;
        }

        .container .payment .three label {
            font-size: large;
            display: block;

        }

        .container .payment .three form {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .container .payment .three form input {
            width: 70%;

            margin-inline: auto;
            height: 40px;
            margin-left: 5px;
            font-size: large;
            padding: 3px 5px;
        }

        .container .payment .three form input[type="submit"] {
            background-color: royalblue;
            color: white;
            border: none;
            width: 100px;
            font-size: large;
            border-radius: 5px;
            cursor: pointer;
            transition: all .2s linear;

        }


        .container .payment .three form input[type="submit"]:hover {
            background-color: blue;

        }

        .container .info {
            font-size: small;
            color: blue;
            cursor: pointer;
            padding: 5px;
        }

        .container .info:hover {
            text-decoration: underline;
        }

        .footer {
            text-align: center;
            font-size: small;
            padding: 5px;
            color: grey;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="nav">
            <p>UPI Information</p>
            <a href="">Know How it's Works</a>
        </div>

        <div class="amt">
            <p>Payment Amount</p>
            <p>₹ <?php echo $amt ; ?></p>
        </div>

        <p class="upi">
            Payment Via UPI
        </p>

        <div class="payment">



            <div class="one">
                <label for=""><span>1.</span> Copy UPI Information</label>
                <div class="field">
                    <input type="text" name="upi-id" value="<?php echo $upi ; ?>" readonly id="upi_address">
                    <button id="copy" onclick="copyUPI()">Copy</button>
                </div>
            </div>

            <div class="two">
                <label for=""><span>2.</span> Transfer the amount you want to payment to us by UPI transfer. </label>

                <div class="methods">
                    <a href="https://play.google.com/store/apps/details?id=net.one97.paytm">
                        <img src="./images/paytm.png" alt="PayTM">
                        <i class="fa-solid fa-angles-right"></i>
                    </a>


                    <a href="https://play.google.com/store/apps/details?id=com.phonepe.app">
                        <img src="./images/phonepe.png" alt="PhonePe">
                        <i class="fa-solid fa-angles-right"></i>
                    </a>

                    <a href="https://play.google.com/store/apps/details?id=com.google.android.apps.nbu.paisa.user">
                        <img src="./images/gpay.png" alt="Google Pay">
                        <i class="fa-solid fa-angles-right"></i>
                    </a>

                    <a href="https://play.google.com/store/apps/details?id=in.org.npci.upiapp&hl=en_IN&pli=1">
                        <img src="./images/upi.png" alt="BHIM">
                        <i class="fa-solid fa-angles-right"></i>
                    </a>
                </div>

            </div>

            <div class="three">
                <label for=""><span>3.</span> Please enter Ref No. to complete the Payment.</label>
                <form action="" METHOD="POST">
                    <input type="text" name="ref" placeholder="Ref No.">
                    <input type="hidden" name="payment_id" value="<?php echo $_SESSION['payment_id']; ?>">
                    <input type="submit" value="Submit">
                </form>
            </div>

        </div>

        <p class="info">Please enter the REF NO/Reference NO/UTR (12-digit number) of your transfer and we will finish
            your Payment
            as soon as possible.</p>


        <div class="footer">
            100% Secure Payments Powered by Pays
        </div>


    </div>



   

<script>
   function copyUPI() {
    let txt = document.getElementById("upi_address");
    txt.select();
    document.execCommand("copy");
    document.querySelector('#copy').innerHTML="Copied"
}
</script>

    

</body >

</html >