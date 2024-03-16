<?php

header('Content-type: application/json');
header('Acess-control-Allow-origin: *');

$data = json_decode(file_get_contents("php://input"), true);

$u_id = $data['u_id'];

include("config.php");

$select_query = "SELECT * FROM `users`  WHERE `id` = {$u_id}";
$select_query = mysqli_query($conn,$select_query);

if($select_query){
    
    $fetch_query = mysqli_fetch_all($select_query,MYSQLI_ASSOC);
    echo json_encode($fetch_query);

}else{

    echo json_encode(array('message' => 'no rec' , 'status' => false));

}

?>