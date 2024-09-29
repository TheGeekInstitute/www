<?php
$mes="";
$error=false;
$conn=mysqli_connect("localhost","root","toor","Nikhil");
session_start();

if(!isset($_SESSION['sname'])){
    $_SESSION['sname']="";
}


if(!isset($_SESSION['fname'])){
    $_SESSION['fname']="";
}


if(!isset($_SESSION['mname'])){
    $_SESSION['mname']="";
}


if(!isset($_SESSION['dob'])){
    $_SESSION['dob']="";
}


if(!isset($_SESSION['gender'])){
    $_SESSION['gender']="";
}






if(!isset($_SESSION['present_division'])){
    $_SESSION['present_division']="";
}



if(!isset($_SESSION['present_district'])){
    $_SESSION['present_district']="";
}




if(!isset($_SESSION['present_address'])){
    $_SESSION['present_address']="";
}






if(!isset($_SESSION['permanent_division'])){
    $_SESSION['permanent_division']="";
}




if(!isset($_SESSION['permanent_district'])){
    $_SESSION['permanent_district']="";
}



if(!isset($_SESSION['permanent_address'])){
    $_SESSION['permanent_address']="";
}


if(!isset($_SESSION['religion'])){
    $_SESSION['religion']="";
}


if(!isset($_SESSION['nationality'])){
    $_SESSION['nationality']="";
}


if(!isset($_SESSION['phone'])){
    $_SESSION['phone']="";
}


if(!isset($_SESSION['email'])){
    $_SESSION['email']="";
}

if(!isset($_SESSION['nid_phone'])){
    $_SESSION['nid_phone']="";
}

if(!isset($_SESSION['blood_group'])){
    $_SESSION['blood_group']="";
}

if(!isset($_SESSION['occupation'])){
    $_SESSION['occupation']="";
}

if(!isset($_SESSION['course_name'])){
    $_SESSION['course_name']="";
}







if($_SERVER['REQUEST_METHOD']=="POST"){
if(isset($_POST['sname']) && !empty($_POST['sname'])){
$sname=$_POST['sname'];
$_SESSION['sname']=$sname;
if(isset($_POST['fname']) && !empty($_POST['fname'])){
$fname=$_POST['fname'];
$_SESSION['fname']=$fname;
 if(isset($_POST['mname']) && !empty($_POST['mname'])){
$mname=$_POST['mname'];
$_SESSION['mname']=$mname;
if(isset($_POST['dob']) && !empty($_POST['dob'])){
$dob=$_POST['dob'];
$_SESSION['dob']=$dob;
if(isset($_POST['gender']) && !empty($_POST['gender'])){
$gender=$_POST['gender'];
$_SESSION['gender']=$gender;
if(isset($_POST['present_division']) && !empty($_POST['present_division'])){
 $present_division=$_POST['present_division'];
 $_SESSION['present_division']=$present_division;
if(isset($_POST['present_district']) && !empty($_POST['present_district'])){
 $present_district=$_POST['present_district'];
 $_SESSION['present_district']=$present_district;
if(isset($_POST['present_address']) && !empty($_POST['present_address'])){
 $present_address=$_POST['present_address'];
 $_SESSION['present_address']=$present_address;
if(isset($_POST['permanent_division']) && !empty($_POST['permanent_division'])){
$permanent_division=$_POST['permanent_division'];
$_SESSION['permanent_division']=$permanent_division;
if(isset($_POST['permanent_district']) && !empty($_POST['permanent_district'])){
 $permanent_district=$_POST['permanent_district'];
$_SESSION['permanent_district']=$permanent_district;
if(isset($_POST['permanent_address']) && !empty($_POST['permanent_address'])){
 $permanent_address=$_POST['permanent_address'];
$_SESSION['permanent_address']=$permanent_address;
if(isset($_POST['religion']) && !empty($_POST['religion'])){
 $religion=$_POST['religion'];
 $_SESSION['religion']=$religion;
if(isset($_POST['nationality']) && !empty($_POST['nationality'])){
 $nationality=$_POST['nationality'];
 $_SESSION['nationality']=$nationality;
if(isset($_POST['phone']) && !empty($_POST['phone'])){
 $phone=$_POST['phone'];
 $_SESSION['phone']=$phone;
if(isset($_POST['email']) && !empty($_POST['email'])){
 $email=$_POST['email'];
 $_SESSION['email']=$email;
if(isset($_POST['nid_phone']) && !empty($_POST['nid_phone'])){
 $nid_phone=$_POST['nid_phone'];
 $_SESSION['nid_phone']=$nid_phone;
if(isset($_POST['blood_group']) && !empty($_POST['blood_group'])){
 $blood_group=$_POST['blood_group'];
 $_SESSION['blood_group']=$blood_group;
if(isset($_POST['occupation']) && !empty($_POST['occupation'])){
 $occupation=$_POST['occupation'];
 $_SESSION['occupation']=$occupation;
if(isset($_POST['course_name']) && !empty($_POST['course_name'])){
 $course_name=$_POST['course_name'];
 $_SESSION['course_name']=$course_name;




 $sql="INSERT INTO `form`(`studentname`, `fathername`, `mothername`, `dob`, `gender`, `present_division`, `present_district`, `present_address`, `permanent_division`, `permanent_district`, `permanent_address`, `religion`, `nationality`, `phone`, `email`, `nid_number`, `blood_group`, `occupation`, `course_name`) VALUES ('$sname','$fname','$mname','$dob','$gender','$present_division','$present_district','$present_address','$permanent_division','$permanent_district','$permanent_address','$religion','$nationality','$phone','$email','$nid_phone','$blood_group','$occupation','$course_name')";

$query=mysqli_query($conn,$sql);
if($query){
    $mes="Regstration Successfully!!!!";
    $error=true;
    session_destroy();
    header("location:form.php");
}
else{
    $mes="Server Busy !!! Please Tragy After Some Time";
}






        }
        else{
            $mes="Enter Your Course Name";
            $error=true;
        }
    }
    else{
        $mes="Enter Occupation ";
        $error=true;

    }
 }
 else{
    $mes="Enter Blood Group";
    $error=true;

}
 }
 else{
    $mes="Enter Your NID PHONE NUmber";
    $error=true;

}
  }
 else{
    $mes="Enter Your Email Address";
    $error=true;

}
    }
    else{
        $mes="Enter Your Phone Number";
        $error=true;

    }
 }
 else{
    $mes="Entern your Nationality";
    $error=true;

}
}
else{
    $mes="Enter Religion";
    $error=true;

}
 
                                                
                                            }
                                            else{
                                                $mes="Enter permanent Address";
                                                $error=true;

                                            }
                                        }
                                        else{
                                            $mes="Enter Permanent District";
                                            $error=true;

                                        }
                                    }
                                    else{
                                        $mes="Enter Permanent Division";
                                        $error=true;

                                    }
                                }
                                else{
                                    $mes="Enter Present Address";
                                    $error=true;

                                }
                            }
                            else{
                                $mes="Enter Present District";
                                $error=true;

                            }
                        }
                        else{
                            $mes="Enter Present Dividion";
                            $error=true;

                        }
                    }
                    else{
                        $mes="Select Gender";
                         $error=true;

                    }
                }
                else{
                    $mes="Enter Date Of Birth";
                     $error=true;

                }
            }
            else{
                $mes="Enter Mother's Name";
                $error=true;

            }
        }
        else{
            $mes="Enter Father's Name";
         $error=true;

        }
    }
    else{
     
        $mes="Enter Student's Name";
        $error=true;
    }
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Form</title>
   <link rel="stylesheet" href="form.css">
</head>
<body>
    <div class="header">
        <h1>Admission Form</h1>
    </div>
    <?php if($error){ echo '
            
            <div class="showw">
            <p>
            '.$mes.'
            
            </p>
            </div>
            '; } ?>
    <div class="box">
            <div class="main">
                <div class="icon">
                    <img src="https://www.geekinstitute.org/img/logo/LOGO.png" alt="icon">
                </div>
                <div class="con">
                <div class="name">
                    <span>GEEK</span> <p>ACADEMY</p>
                </div>
                <div class="lok">
                    <p>Another way to Education</p>
                </div>
                <div class="slok">
                    <p>EDUCATION & LEARNING ACADEMY</p>
                </div>
                <div class="tag">
                    <p>ADIMISSION FORM</p>
                </div>
            </div>
                <div class="icon1">
                    <img src="https://www.geekinstitute.org/img/logo/LOGO.png" alt="icon">
                </div>
            </div>

            <div class="form">
                <form method="post">
                <div class="section1">
                <div class="sname">
                <label for=""> Student's Name :</label>
                <input type="text" name="sname" value="<?php echo $_SESSION['sname']; ?>">
            </div>
            <div class="fname">
                <label for="">Father's Name : </label>
                <input type="text" name="fname" value="<?php echo $_SESSION['fname']; ?>">
            </div>
            <div class="mname">
                <label for="">Mother's Name : </label>
                <input type="text" name="mname" value="<?php echo $_SESSION['mname']; ?>">
            </div>
                <div class="dob">
                    <label for="">Birth Date : </label>
                    <input type="date" name="dob" value="<?php echo $_SESSION['dob']; ?>">
                </div>
                    <div class="gender">
                        <label class="gen"> Gender: </label>
                        <?php
                        if($_SESSION['gender']=="Male"){
                            echo '
                            <input type="radio" name="gender" value="Male" checked>
                            ';
                        }
                        else{
                            echo '
                            <input type="radio" name="gender" value="Male">
                            ';
                        }

                        ?>
                        <label class="ma">Male</label>
                        <?php
                        if($_SESSION['gender']=="Female"){
                            echo '
                            <input type="radio" name="gender" value="Female" checked>
                            ';
                        }
                        else{
                            echo '
                            <input type="radio" name="gender" value="Female">
                            ';
                        }

                        ?>
                        <label class="fe">Female</label>
                    </div>
                </div>


                <div class="section2">
                    <div class="ad">
                        <p>Present Address</p>
                    </div>
                    <div class="division">
                        <label for="">Division : </label>
                        <input type="text" name="present_division" value="<?php echo $_SESSION['present_division']; ?>">
                    </div>
                    <div class="dis">
                        <label for="">District : </label>
                        <input type="text" name="present_district" value="<?php echo $_SESSION['present_district']; ?>">
                    </div>
                    <div class="add">
                        <label for="">Address : </label>
                        <input type="text" name="present_address"  value="<?php echo $_SESSION['present_address']; ?>">
                    </div>
                </div>    
                
                
                <div class="section3">
                    <div class="ad1">
                        <p>Permanent Address</p>
                    </div>
                    <div class="division1">
                        <label for="">Division : </label>
                        <input type="text" name="permanent_division" value="<?php echo $_SESSION['permanent_division']; ?>">
                    </div>
                    <div class="dis1">
                        <label for="">District : </label>
                        <input type="text" name="permanent_district"  value="<?php echo $_SESSION['permanent_district']; ?>">
                    </div>
                    <div class="add1">
                        <label for="">Address : </label>
                        <input type="text" name="permanent_address" value="<?php echo $_SESSION['permanent_address']; ?>">
                    </div>
                </div>  

                <div class="section4">
                    <div class="re">
                        <label for="">Religion :</label>
                        <input type="text" name="religion" value="<?php echo $_SESSION['religion']; ?>">

                        <label for="">Nationality :</label>
                        <input type="text" name="nationality" value="<?php echo $_SESSION['nationality']; ?>">
                    </div>
                    <div class="ph">
                        <label for="">Phone Number :</label>
                        <input type="text" name="phone"  value="<?php echo $_SESSION['phone']; ?>">
                        
                        <label for="">Email Address :</label>
                        <input type="email" name="email"  value="<?php echo $_SESSION['email']; ?>">
                    </div>
                    <div class="nid">
                        <label for="">NID Number :</label>
                        <input type="text" name="nid_phone"  value="<?php echo $_SESSION['nid_phone']; ?>">

                        <label for="">Blood Group :</label>
                        <input type="text" name="blood_group"  value="<?php echo $_SESSION['blood_group']; ?>">
                    </div>
                    <div class="occ">
                        <label for="">Occupation :</label>
                        <input type="text" name="occupation"  value="<?php echo $_SESSION['occupation']; ?>">
                    </div>
                    <div class="co">
                        <label for="">Course Name :</label>
                        <input type="text" name="course_name"  value="<?php echo $_SESSION['course_name']; ?>">
                    </div>
                </div>
                
                <div class="section5">
                    <div class="he">
                        <p>DECLARATION</p>
                    </div>
                    <div class="para">
                        <p>I hereby state that all the informaton noted above is accurate to the best of my beliefs and i take full responsibility for the correctness of the information</p>
                    </div>
                    <div class="btn">
                        <button type="reset">Cancel</button>
                        <button type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>