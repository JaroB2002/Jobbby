<?php
include_once(__DIR__ . '/classes/Cv.php');

$cvs = Cv::getCvById($_GET['id']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <link rel="stylesheet" href="css/cvshower.css">
    <title>Jouw CV</title>
</head>
<body>
<?php
    include_once(__DIR__ . '/compartments/header.php');
    ?>
    <?php foreach($cvs as $cv):?>
        <div class="cv-container">
            <h1>Jouw CV</h1>
            <div>
                <h2>Naam</h2>
                <p><?php echo $cv['voornaam'];?></p>
            </div>
        </div>
    <?php endforeach;?>

<?php
    include_once(__DIR__ . '/compartments/footer.php')
    ?>
</body>
</html>