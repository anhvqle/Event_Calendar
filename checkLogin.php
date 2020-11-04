<?php
//test commit
ini_set("session.cookie_httponly", 1);
session_start();

$username = $_SESSION['token'];
header("Content-Type: application/json");
$json_str = file_get_contents('php://input');
$json_obj = json_decode($json_str, true);

$token = $json_obj['token'];

if(isset($_SESSION['token']) && isset($_SESSION['username'])){
    $username = $_SESSION['username'];
    $token = $_SESSION['token'];
    echo json_encode(array(
        "success" => true,
        "username" => $username,
        "token" => $token
    ));
}
else{
    echo json_encode(array(
        "success" => false
    ));
}



exit;
?>