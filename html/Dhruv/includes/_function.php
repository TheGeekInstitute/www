<?php

function email_msg($email,$otp,$name,$for){
    if($for=="verify"){
        $msg='
        <div style="font-family: Helvetica,Arial,sans-serif;min-width:1000px;overflow:auto;line-height:2">
    <div style="margin:50px auto;width:70%;padding:20px 0">
    <div style="border-bottom:1px solid #eee">
      <a href="" style="font-size:1.4em;color: #00466a;text-decoration:none;font-weight:600">ABCD Company</a>
    </div>
    <p style="font-size:1.1em">Hi, '.$name.'</p>
    <p>Thank you for choosing Your Brand. Use the following OTP to complete your Sign Up procedures. OTP is valid for 30 minutes</p>
    <h2 style="background: #00466a;margin: 0 auto;width: max-content;padding: 0 10px;color: #fff;border-radius: 4px;">'.$otp.'</h2>
    <p style="font-size:0.9em;">Regards,<br />Your Brand</p>
    <hr style="border:none;border-top:1px solid #eee" />
    <div style="float:right;padding:8px 0;color:#aaa;font-size:0.8em;line-height:1;font-weight:300">
      <p>ABCD Company</p>
      <p>1215 Kapashera</p>
      <p>New Delhi</p>
    </div>
  </div>
</div>
        
        ';

    }
    else if($for=="reset"){
        $msg='
        <div style="font-family: Helvetica,Arial,sans-serif;min-width:1000px;overflow:auto;line-height:2">
  <div style="margin:50px auto;width:70%;padding:20px 0">
    <div style="border-bottom:1px solid #eee">
      <a href="" style="font-size:1.4em;color: #00466a;text-decoration:none;font-weight:600">Abcd Company</a>
    </div>
    <p style="font-size:1.1em">Hi, </p>
    <p>Thank you for choosing Your Brand. Use the following OTP to complete your Reset Password procedures. OTP is valid for 30 minutes</p>
    <h2 style="background: #00466a;margin: 0 auto;width: max-content;padding: 0 10px;color: #fff;border-radius: 4px;">'.$otp.'</h2>
    <p style="font-size:0.9em;">Regards,<br />Your Brand</p>
    <hr style="border:none;border-top:1px solid #eee" />
    <div style="float:right;padding:8px 0;color:#aaa;font-size:0.8em;line-height:1;font-weight:300">
      <p>ABCD Company</p>
      <p>1215 Kapashera</p>
      <p>New Delhi</p>
    </div>
  </div>
</div>
        ';
    }
    else{
        $msg="";
    }


    return $msg;
}


?>