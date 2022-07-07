<?php 
if(isset($_REQUEST['submit'])){
 $data = '';
 $filename = "data.json";
if(is_file($filename)){
	$data = file_get_contents($filename);
}
$json_arr = json_decode($data, true);

$json_arr[] = array('name' => $_REQUEST['sname'], 'email' => $_REQUEST['semail'], 'password' => $_REQUEST['spassword'], 'phone number' => $_REQUEST['sphone'], 'gender' => $_REQUEST['sgender'], 'address' => $_REQUEST['saddress']);
file_put_contents($filename, json_encode($json_arr));
}
?>