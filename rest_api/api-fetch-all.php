<?php

header('Content-type: application/json');
header('Acess-control-Allow-origin: *');

include("config.php");

$select_query = "SELECT * FROM `users`";
$select_query = mysqli_query($conn,$select_query);

if(mysqli_num_rows($select_query) > 0){
    
    $fetch_query = mysqli_fetch_all($select_query,MYSQLI_ASSOC);
    echo json_encode($fetch_query);

}else{

    echo json_encode(array('message' => 'no rec' , 'status' => false));

}

?>