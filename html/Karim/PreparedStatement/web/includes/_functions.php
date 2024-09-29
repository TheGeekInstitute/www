<?php


function email_msg($fullname,$email,$token,$for){
  if($for=="verify"){
    $msg='
    <h1>Hi, '.$fullname.'</h1>
    Click The Link Below to Verify Your Account
    <a href="http://10.10.10.10/Karim/PreparedStatement/web/verify.php?token='.$token.'&email='.$email.'">Verify Now</a>
    ';
  }
  else if($for=="reset"){

  }
  else{

  }

  return $msg;
}




function email_otp($fullname,$email,$otp,$for){
  if($for=="verify"){
    $msg='
    <h1>Hi, '.$fullname.'</h1>
    Use This OTP to Verify Your Account
    <i><h1>'.$otp.'</h1></i>
    ';
  }
  else if($for=="reset"){

  }
  else{

  }

  return $msg;
}







function mobile_sms($otp,$mobile){
  $fields = array(
    "variables_values" => $otp,
    "route" => "otp",
    "numbers" => $mobile,
  );
  
  $curl = curl_init();
  
  curl_setopt_array($curl, array(
  CURLOPT_URL => "https://www.fast2sms.com/dev/bulkV2",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_SSL_VERIFYHOST => 0,
  CURLOPT_SSL_VERIFYPEER => 0,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => json_encode($fields),
  CURLOPT_HTTPHEADER => array(
    "authorization: YCT7BSGRQnemyi5ZNkpJ1FgVtsHjuqLU0zDbMOXwEdxarI43h9RyLJs48OcQK0bI69EANzCr1aehZVom",
    "accept: */*",
    "cache-control: no-cache",
    "content-type: application/json"
  ),
  ));
  
  $response = curl_exec($curl);
  $err = curl_error($curl);
  
  curl_close($curl);
  
  if ($err) {
  return false;
  } else {
  return true;
  }
}

?>