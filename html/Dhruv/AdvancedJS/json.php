<?php
sleep(2);
header('Content-Type: application/json');
header('Access-Control-Allow-Origin:*');
header('Access-Control-Allow-Methods:POST');
header('Access-Control-Allow-Headers:Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Origin,Access-Control-Allow-Methods,Authorization.X-Requested-With');


$data = json_decode(file_get_contents("php://input"),true);
$id = $data['id'];
$name = $data['name'];

$fptr = fopen("fetch.html","a");
if(fwrite($fptr,"ID:". $id . "\n Name : ".$name . "\n\n")){
    echo json_encode(
        
        
    );
}
else{
    echo json_encode(["message"=>"Can not Insert Record","status"=>false]);

}
fclose($fptr);





    



?>