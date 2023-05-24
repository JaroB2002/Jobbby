<?php
    require_once(__DIR__."/../classes/Vacature.php");
    $jobs = Vacature::getVacaturesAlphabetically();

    $response = [
        'status' => 'success',
        'message' => 'Vacatures alfabetisch opgehaald',

    ];

    header('Content-Type: application/json');
    echo json_encode($response);
