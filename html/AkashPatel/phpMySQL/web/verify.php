<?php
$conn=mysqli_connect("localhost",'root',"toor","Akash");

if(isset($_GET['token']) && isset($_GET['email']) && !empty($_GET['token']) && !empty($_GET['email'])){

    $token=$_GET['token'];
    $email=$_GET['email'];
    $sql="SELECT `user_id`, `fullname`, `email`, `username`, `password`, `token`, `is_verified` FROM `users` WHERE `token`='$token' AND `email`='$email'";
    $query=mysqli_query($conn,$sql);
    if(mysqli_num_rows($query)==1){
        $data=mysqli_fetch_assoc($query);
        if($data['is_verified']==0){
            $is_verified=1;
            $sql="UPDATE `users` SET `is_verified`=$is_verified WHERE `token`='$token' AND `email`='$email'";

            $query=mysqli_query($conn,$sql);
            if($query){
                echo "Account Verification Completed";
            }

        }
        else{
            echo "Account Already Verified";
        }



    }
    else{
        echo '
        <script>
                alert("Invalid Account")

        </script>
        ';
    }

}

?>