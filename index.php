<?php
    include_once(__DIR__.'/classes/User.php');
    include_once(__DIR__.'/classes/Vacature.php');

    session_start();


    $jobs = Vacature::getLastVacatures();

    $horecas = Vacature::getLastHoreca();

    $informaticas = Vacature::lastInformatica();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home - Jobby</title>
</head>
<body>
    <p>HET WERK KUT</p>
</body>
</html>