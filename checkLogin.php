<?php
//test commit
ini_set("session.cookie_httponly", 1);
session_start();

$username = $_SESSION['token'];
header("Content-Type: application/json");
$json_str = file_get_contents('php://input');
$json_obj = json_decode($json_str, true);

$token = $json_obj['token'];

if(isset($_SESSION['token']) && $token == $_SESSION['token']){
    $success = true;
}
else{
    $success = false;
}

echo json_encode(array(
    "success" => $success
));

exit;
?>