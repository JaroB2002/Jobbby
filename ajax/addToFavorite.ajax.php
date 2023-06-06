<?php
    session_start();
    require_once(__DIR__."/../classes/Favorites.php");
    require_once(__DIR__."/../classes/Vacature.php");
    require_once(__DIR__."/../classes/User.php");

    $user = User::getUserByEmail($_SESSION['email']);
    $favorites = Favorites::addFavorites($_POST['id'], $user['id']);

    $response = [
        'status' => 'success',
        'message' => 'Added to favorites',

    ];

    header('Content-Type: application/json');
    echo json_encode($response);
