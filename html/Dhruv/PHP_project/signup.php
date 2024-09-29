<?php
define("FILE_INCLUDE",true);
include("../includes/db.php");
include("../includes/_filter.php");
include("../includes/_functions.php");

include("../includes/mail/mail.php");


session_start();
session_regenerate_id();

if(!isset($_SESSION['fullname'])){
    $_SESSION['fullname']="";
}


if(!isset($_SESSION['email'])){
    $_SESSION['email']="";
}


if(!isset($_SESSION['mobile'])){
    $_SESSION['mobile']="";
}


if(!isset($_SESSION['gender'])){
    $_SESSION['gender']="";
}

$error=$signup=false;
$color=$msg=$alt_msg="";

if($_SERVER['REQUEST_METHOD']=="POST"){
    if(isset($_POST['fullname']) && !empty($_POST['fullname'])){

        if(strlen($_POST['fullname'])>=5 && strlen($_POST['fullname'])<=36 && preg_match('/^[a-zA-Z ]*$/',$_POST['fullname'])){
            $fullname=mysqli_real_escape_string($connection,input_filter($_POST['fullname']));
            $_SESSION['fullname']=$fullname;

            if(isset($_POST['email']) && !empty($_POST['email'])){

            if(strlen($_POST['fullname'])>=5 && strlen($_POST['fullname'])<=100 && filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
                $email = mysqli_real_escape_string($connection,input_filter($_POST['email']));
                $_SESSION['email']=$email;

                if(isset($_POST['mobile']) && !empty($_POST['mobile'])){

                    if(ctype_digit($_POST['mobile']) && strlen($_POST['mobile'])==10){
                        $mobile = mysqli_real_escape_string($connection,input_filter($_POST['mobile']));
                        $_SESSION['mobile']=$mobile;

                        if(isset($_POST['gender']) && !empty($_POST['gender'])  && in_array($_POST['gender'],["Male","Female","Others"])){
                        $gender = mysqli_real_escape_string($connection,input_filter($_POST['gender']));
                        $_SESSION['gender']=$gender;

                        if(isset($_POST['password']) && !empty($_POST['password']) && isset($_POST['cnfpassword']) && !empty($_POST['cnfpassword'])){

                            if($_POST['password']==$_POST['cnfpassword']){

                                if(strlen($_POST['password'])>=6 && strlen($_POST['password'])<=12){

                                    $password=password_hash($_POST['password'],PASSWORD_BCRYPT);
                                    $signup=true;

                                }
                                else{
                                    $error=true;
                                    $color="red";
                                    $msg="Password";
                                    $alt_msg="Should be min 6 and max 12 characters";
                                }

                            }
                            else{
                                $error=true;
                                $color="red";
                                $msg="Password";
                                $alt_msg="Not matched";
                            }

                        }
                        else{
                            $error=true;
                            $color="red";
                            $msg="Password";
                            $alt_msg="Should Not be Empty";
                        }

                            
                        }
                        else{
                            $error=true;
                            $color="red";
                            $msg="Choose";
                            $alt_msg="a gender";
                        }


                    }
                    else{
                        $error=true;
                        $color="red";
                        $msg="Invalid";
                        $alt_msg="Mobile Number";
                    }

                }
                else{
                    $error=true;
                    $color="red";
                    $msg="Mobile Number";
                    $alt_msg="Should Not be Empty";
                }

        }
        else{
            $error=true;
            $color="red";
            $msg="Invalid";
            $alt_msg="Email Address";
        }

            }
            else{
                $error=true;
                $color="red";
                $msg="Email";
                $alt_msg="Should not be Empty";
            }

        }
        else{
            $error=true;
            $color="red";
            $msg="Invalid";
            $alt_msg="Fullname";
        }


     
        
    }
    else{
        $error=true;
        $color="red";
        $msg="Fullname";
        $alt_msg="Should not be Empty";
    }
}



//signup process
if($signup==true){
   $check_sql="SELECT `email`, `mobile` FROM `user_signup` WHERE `email`=? OR `mobile`=?";
   $check_stmt = $connection->prepare($check_sql);
   $check_stmt->bind_param("ss",$email,$mobile);
   $check_stmt->bind_result($db_email,$db_mobile);
   $check_stmt->execute();
   $check_stmt->store_result();
   if($check_stmt->num_rows==1){
    $check_stmt->fetch();
    if($email==$db_email){
        $error=true;
        $color="red";
        $msg="Email";
        $alt_msg="Already registered";
        $_SESSION['email']="";
    }
    else{
        $error=true;
        $color="red";
        $msg="Mobile";
        $alt_msg="Already registered";
        $_SESSION['mobile']="";
    }

   }
   else{
    //insert
    $user_id=bin2hex(random_bytes(10));
    $is_verified=0;
    $insert_sql="INSERT INTO `user_signup`(`user_id`, `fullname`, `email`, `mobile`, `gender`, `password`, `is_verified`) VALUES (?,?,?,?,?,?,?)";

    $insert_stmt=$connection->prepare($insert_sql);
    $insert_stmt->bind_param("ssssssi",$user_id,$fullname,$email,$mobile,$gender,$password,$is_verified);
    $insert_stmt->execute();
    $insert_stmt->store_result();
    

    $otp=mt_rand(111111,999999);
    $valid_form=time();
    $otp_sql="INSERT INTO `user_otp`(`user_id`, `otp`, `valid_from`) VALUES (?,?,?)";
    $otp_stmt=$connection->prepare($otp_sql);
    $otp_stmt->bind_param("sis",$user_id,$otp,$valid_form);
    $otp_stmt->execute();
    $otp_stmt->store_result();
    if($otp_stmt->affected_rows==1 && $insert_stmt->affected_rows==1){
        if(sendmail($email,"OTP Verification",email_msg($email,$otp,$fullname,"verify"))){
            //redirect to Otp Verification Page;
            

        }else{
            $error=true;
            $color="red";
            $msg="Server busy";
            $alt_msg="Can Not Send OTP At This Time";
        }
    }
    else{
        $error=true;
        $color="red";
        $msg="Server busy";
        $alt_msg="Can Not Register At This Time";
       
    }


    $check_stmt->close();
    $otp_stmt->close();
    $insert_stmt->close();

   }

}



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up | Logo</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.2.0/css/all.css">
    <style>
        .alert {
  padding: 20px;
 
  color: white;
}

.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

.closebtn:hover {
  color: black;
}
    </style>
</head>

<body>
    <header>
        <nav>
            <div class="logo">
                <!-- <h2>LOGO</h2> -->
                <a href="./index.html"><img src="../Images/Brands/Logo.png" alt="logo image"></a>
            </div>
            <div class="nav-menu">
                <a href="./index.html">Home</a>
                <a href="#">Shop</a>
                <a href="#">Pages</a>
                <a href="#">Contact</a>
            </div>
            <div class="cart-navigation">
                <form action="">
                    <input type="text">
                    <button id="searchbtn" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                </form>
                <a href="#"><i class="fa-light fa-cart-shopping"></i></a>
                <a href="#"><i class="fa-light fa-user"></i></a>
            </div>
        </nav>
    </header>
    <div class="signup-container">
        <div class="signup-hero">
            <div class="signup-image">
                <img src="../Images/Assets/login.svg" alt="signup Image">
            </div>
            <div class="signup-details">
                <h2>OwnOnlineShop</h2>
                <h2>Let's Create Your Account <i class="fa-solid fa-arrow-right-long"></i> </h2>

            <?php
            if($error){
                echo<<<data
                <div class="alert" style="background-color:$color;">
                <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                <strong>$msg !</strong> $alt_msg.
                </div>
                data;
            }
            
            ?>


                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);  ?>" method="post" >
                    <section class="name-section">
                        <p>Full Name</p>
                        <input type="text" name="fullname"  value="<?php echo $_SESSION['fullname']; ?>">
                    </section>
                    <section class="email-section">
                        <p>Email</p>
                        <input type="text" name="email" id="" value="<?php echo $_SESSION['email']; ?>">
                    </section>
                    <section class="mobile-section">
                        <p>Mobile No</p>
                        <input type="number" name="mobile" id="" value="<?php echo $_SESSION['mobile']; ?>">
                    </section>
                    <section class="gender-section">
                        <p>Gender</p>
                        <select name="gender" id="">
                            <option value="" >Choose</option>
                            <option value="Male"  <?php if($_SESSION['gender']=="Male") echo "selected"; ?>>Male</option>
                            <option value="Female" <?php if($_SESSION['gender']=="Female") echo "selected"; ?> >Female</option>
                            <option value="Others" <?php if($_SESSION['gender']=="Others") echo "selected"; ?>>Others</option>

                        </select>
                    </section>
                    <section>
                        <p>Password</p>
                        <input type="password" name="password">
                    </section>
                    <section>
                        <p>Confirm Password</p>
                        <input type="password" name="cnfpassword">
                    </section>
                    <div class="submit-section">
                        <button type="submit">Sign Up</button>
                        <p>Already Have Account ? <a href="./login.php">Login Here</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Footer Starts -->
    <footer>
        <div class="footer-hero">
            <div class="about-footer">
                <h2>Easter</h2>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Delectus adipisci nostrum voluptatibus
                    porro dignissimos qui doloremque, fugit minima id voluptate?</p>
            </div>
            <div class="service-footer">
                <h2>Services</h2>
                <ul>
                    <li><a href="#">Deals in Devices</a></li>
                    <li><a href="#">Home Decor</a></li>
                    <li><a href="#">Beauty</a></li>
                    <li><a href="#">Health</a></li>
                </ul>
            </div>
            <div class="Cateogaries-footer">
                <h2>Cateogaries</h2>
                <ul>
                    <li><a href="#">Electronics</a></li>
                    <li><a href="#">Refurbished Devices</a></li>
                    <li><a href="#">Fashion</a></li>
                    <li><a href="#">Accesories</a></li>
                    <li><a href="#">Decoration</a></li>
                    <li><a href="#">Beauty Products</a></li>
                    <li><a href="#">Tickets</a></li>
                </ul>
            </div>
            <div class="contact-footer">
                <ul>
                    <h2>Contact Us</h2>
                    <li><a href="mailto:mrabraham@thegics.in"> <i class="fa-solid fa-envelope"></i> Email US</a></li>
                    <li><a href="tel:8447377952"> <i class="fa-solid fa-phone"></i> Call Us</a></li>
                    <li><a href="#"> <i class="fa-solid fa-house-chimney-crack"></i> Kapashera New Delhi</a></li>
                </ul>
                <div class="contact-social">
                    <a href=""><i class="fa-brands fa-instagram"></i></a>
                    <a href=""><i class="fa-brands fa-facebook-square"></i></a>
                    <a href="https://wa.me/8447377952"><i class="fa-brands fa-whatsapp"></i></a>
                </div>
            </div>
        </div>
        <div class="copyright-footer">
            <p>Copyright &copy; 2022 | Created By <a href="https://www.thegics.in/" target="_blank">Gics</a></p>
        </div>
    </footer>
    <!-- Footer ends -->
</body>

</html>