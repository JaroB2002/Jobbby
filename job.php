<?php
include_once(__DIR__ . '/classes/Vacature.php');

session_start();

if(!empty($_GET['id'])) {
    $vacature = Vacature::getVacatureById($_GET['id']);
} else {
    header('Location: jobs.php');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <link rel="stylesheet" href="../Workz2/css/singlejob.css">
    <title><?php echo htmlspecialchars($vacature['job_titel']);?></title>
</head>

<body>
    <?php
    include_once(__DIR__ . '/compartments/header.php');
    ?>
    <div class="entire-vac">
        <div class="top-vac">
            <div class="top-vac-left">
                <div class="top-vac-left-img">
                    <img src="images/chrome.png" alt="">
                </div>
                <div class="top-vac-left-names">
                
                    <p><?php echo $vacature['job_titel'];?></p>
                    <p>Bij <?php echo $vacature['bedrijfnaam']?></p>
                </div>
            </div>

            <div class="top-vac-right">
                <div id="top-vac-right-title" onclick="showSol()">
                    <h1>Solliciteer nu</h1>
                </div>
            </div>
        </div>

        <div class="vac-bottom">
            <div class="vac-bottom-left">
                <h1>Job Beschrijving</h1>
                <p><?php echo $vacature['job_beschrijving'];?></p>
                <h1>Verplichtingen</h1>
                <p><?php echo $vacature['verplichtingen'];?></p>
                <h1>Nodige kennis</h1>
                <p><?php echo $vacature['kennis'];?></p>
                <h1>Voordelen</h1>
                <p><?php echo $vacature['voordelen'];?></p>            
            </div>

            <div class="vac-bottom-right">
                <div class="vac-bottom-right-top">
                    <div class="vac-right-left">
                        <img src="../Workz2/images/money.svg" alt="">
                        <p class="subtitle" >Salaris</p>
                        <p>€<?php echo $vacature['salaris']?> per uur</p>
                    </div>
                    <div class="vac-right-right">
                        <img src="../Workz2/images/loc.svg" alt="">
                        <p class="subtitle" >Job locatie</p>
                        <p><?php echo $vacature['locatie']?></p>
                    </div>
                </div>

                <div class="vac-bottom-right-bottom">
                    <p id="overview">Job overview</p>
                    <div class="vac-summary">
                        <div class="sumn">
                            <img src="../Workz2/images/Timer.svg" alt="">
                            <p class="subtitle" >Online sinds<br></p>
                            <p><?php echo $vacature['geldig_van'];?></p>
                        </div>

                        <div class="sumn">
                            <img src="../Workz2/images/Timer.svg" alt="">
                            <p class="subtitle" >Geldig tot<br></p>
                            <p><?php echo $vacature['geldig_tot'];?></p>
                        </div>

                        <div class="sumn">
                            <img src="../Workz2/images/stack.svg" alt="">
                            <p class="subtitle" >Entry level<br></p>
                            <p><?php echo $vacature['job_level'];?></p>
                        </div>

                    </div>


                </div>

                <p id="deel">Deel deze vactature!</p>
                <div id="share-buttons">
                    <div class="fb-share-button">
                        <a href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fwww.facebook.com%2Fprofile.php%3Fid%3D100012021164826&amp;src=sdkpreparse" target=”_blank”>
                            <img src="images/fblogo.png" alt="">
                        </a>
                    </div>

                    <div class="twitter">
                        <a class="twitter-share-button" target=”_blank”
                        href="https://twitter.com/intent/tweet">
                            <img src="images/twitter.avif" alt="">
                        </a>
                    </div>
                </div>


            </div>
        </div>


        
    </div>
    <div id="sol-screen" style="display:none">
            <h2>Solliciteer bij <?php echo $vacature['bedrijfnaam']?></h2>
            <form action="solliciteren.php" method="post">
                <p onclick="closeSol()">X</p>
                <label for="CV"><strong>Upload je CV</strong></label>
                <input type="file" name="CV" placeholder="CV"><br><br>
                <label for="motbrief"><strong>Upload je motivatiebrief</strong></label>
                <input type="file" name="motbrief" placeholder="motbrief"><br>
                <input id="sol-btn" type="submit" value="Solliciteer">
                
        </div>
    <?php
    include_once(__DIR__ . '/compartments/footer.php')
    ?>
</body>
<script>
    var sol = document.getElementById("sol");
    var solscreen = document.getElementById("sol-screen");
    var close = document.getElementById("close");

    function showSol(){
        solscreen.style.display = "block";
    }
    function closeSol(){
        solscreen.style.display = "none";
    }
</script>
</html>