<?php 
include_once(__DIR__."/../classes/User.php");
include_once(__DIR__."/../classes/Favorites.php");

session_start();

try{
    $removes = Favorites::removeFavorite();

    $response = [
        'status' => 'success',
        'message' => 'You have removed this job from your favorites'
    ];
}
catch(Throwable $err){
    $response = [
        'status' => 'error removing favorites - ajax',
        'message' => $err->getMessage()
    ];
}

header('Content-Type: application/json');
echo json_encode($response);