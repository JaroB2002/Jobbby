<?php
include_once(__DIR__ . '/classes/Cv.php');
include_once(__DIR__ . '/classes/User.php');
session_start();

if(!empty($_GET['id'])) {
    $jobs = User::getUserbyId($_GET['id']);
} else {
    header('Location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <link rel="stylesheet" href="css/cvshower.css">
    <title>CV</title>
</head>
<body>
<?php
    include_once(__DIR__ . '/compartments/header.php');
    ?>
        <div class="cv-container">
            <div>
                <?php foreach($cvs as $cv):?>
                <h2>Voornaam</h2>
                <p><?php echo $cv['voornaam'] ?></p>
                <?php endforeach;?>
            </div>
        </div>

<?php
    include_once(__DIR__ . '/compartments/footer.php')
    ?>
</body>
</html>