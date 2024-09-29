<?php
$json1 = '{
	"id": "#001",
    "username": "Tom",
    "type": "admin",
    "status": "active"
}';

$json2 = '{
    "id": "#002",
    "username": "Jerry",
    "type": "user",
    "status": "Inactive"
}';
$json3 = '{
    "id": "#002",
    "username": "Jerry",
    "type": "user",
    "status": "Inactive"
}';
$user[] = json_decode($json1, true);
$user[] = json_decode($json2, true);
$user[]= json_decode($json3,true);
$json_merge = json_encode($user);
?>

<h4>Given JSON String:</h4>
<div>
	<div>$json1 = <?php echo $json1; ?></div>
	<div>$json2 = <?php echo $json2; ?></div>
</div>
<h4>Output:</h4>
<div><?php echo $json_merge; ?></div>
