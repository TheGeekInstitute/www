<form method="POST" enctype="multipart/formdata">
     Name:<input type="text" name="name" placeholder="Enter  your name"  title="Please enter your Name">
    <br><br>
    Gender :  Female<input type="radio" name="gender" value="female">
        Male <input type="radio" name='gender' value="male">
        <br><br>
        Email : <input type="text" placeholder="email" name="email">
        <br><br>
        Password : <input type="password" name="password">    
        <br><br>
        Mob No : <input type="Mob No" placeholder="Mobile No" name="mobile">
        <br><br>
    
        <input type="submit">
        <input type="reset">

</form>
<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
    if(!empty($_POST['name'])){
        if(ctype_alpha($_POST['name'])){
        $name=$_POST['name'];
        if(!empty($_POST['gender'])){
            if($_POST['gender']=='male' || $_POST['gender']=='female' || $_POST['gender']=='others'){
                $_POST['gender'];
                if(!empty($_POST['email'])){
                    if(filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
                        $email=$_POST['email'];
                        if(!empty($_POST['password'])){
                            $password=$_POST['password'];
                            if(!empty($_POST['mobile'])){
                                if(ctype_digit($_POST['mobile']) && strlen($_POST['mobile'])==10){
                                    $mobile=$_POST['mobile'];

                                   echo "All Information is correct";     


                                }
                                else{
                                    echo "Invalid Mobile Number";
                                }
                            }
                            else{
                                echo "Mobile number should not be empty";
                            }
                        }
                        else{
                            echo "Password Should not be Empty";
                        }

                    }
                    else{
                        echo "Invalid Email";
                    }
                }
                else{
                    echo "Email Should not be empty";
                }
            }
            else{
                echo "Invalid Gender";
            }
        }
        else{
            echo "Please Choose a gender";
        }

        }
        else{
            echo "Invalid Name Format";
        }        
    }
    else{
        echo "Name Should Not Be empty";
    }
}


?>