<?php 
    include_once(__DIR__.'/../classes/Vacature.php');
    include_once(__DIR__.'/../classes/User.php');
    session_start();
//fjldkqsjkfkf
    if(!isset($_SESSION['loggedIn']) || $_SESSION['loggedIn'] === false){
        header('location: ../logout.php');
    }

    $user = User::getUserByEmail();
    if ($user['is_bedrijf'] === 0){
        header('location: ../index.php');
    } 

    if(isset($_POST['next-button'])){
        // even iets 
        $vacature = new Vacature();
    
        // $target = "../images/".basename($_FILES['logo']['name']);
        // $imgExt = strtolower(pathinfo($target,PATHINFO_EXTENSION));
        // $extensions_arr = array("jpg","jpeg","png","gif");
        // if(in_array($imgExt,$extensions_arr)){
        //     $image_base64 = base64_encode(file_get_contents($_FILES['logo']['tmp_name']));
        //     $image = "data::image/".$imgExt.";base64,".$image_base64;
        //     if(move_uploaded_file($_FILES['logo']['tmp_name'],$target)){
        //         $msg = "Image uploaded successfully";
        //     }else{
        //         $msg = "Failed to upload image";
        //     }
        // }


        // $vacature->setLogo($_FILES['logo']);


        $vacature->setJobtitel($_POST['jobnaam']);
        $vacature->setNodig($_POST['nodig']);
        $vacature->setBedrijfnaam($_POST['bedrijfnaam']);
        $vacature->setSector($_POST['sector']);
        $vacature->setJob_beschrijving($_POST['jobbeschrijving']);
        $vacature->setVereiste($_POST['vereiste']);
        $vacature->setKennis($_POST['kennis']);
        $vacature->setVoordelen($_POST['voordelen']);
        $vacature->setSalaris($_POST['salaris']);
        $vacature->setLocatie($_POST['locatie']);
        $vacature->setGeldig_tot($_POST['geldig_tot']);
        $vacature->setLevel($_POST['level']);
        $vacature->setPro($_POST['pro']);
        $vacature->insertVacature();

        header('location: vacaturetohome.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <link rel="stylesheet" href="vacature.css">    
    <title>Vacature</title>
    <?php 
        include_once('header.php');
    ?>
</head>
<body>
    <form action="" enctype="multipart/form-data" method="POST">
        <div class="vacature-entire">
            <div class="vacature-left">
                <label for="jobnaam"><br>Job titel<br></label>
                <input type="text" id="text-titel" name="jobnaam">
<!-- 
                <label for="logo"><br>Logo<br></label>
                <input type="file" id="logo" name="logo" accept=".jpg, .jpeg, .png"> -->

                <label for="bedrijfnaam"><br>Bedrijfnaam<br></label>
                <input type="text" id="text-titel" name="bedrijfnaam">

                

                <label for="nodig"><br>Heb je snel werknemers nodig?<br></label>
                <select id="nodig" name="nodig">
                    <option value="dringend">Dringend werknemers gezocht!</option>
                    <option value="snel">Zo snel mogelijk!</option>
                    <option value="deze_maand">Werknemers gezocht deze maand!</option>
                    <option value="neen">Neen</option>
                </select>

                <label for="sector"><br>Sector<br></label>
                <select id="nodig" name="sector">
                    <option value="informatica">Informatica</option>
                    <option value="tourisme">Tourisme</option>
                    <option value="horeca">Horeca</option>
                    <option value="communicatie">Communicatie</option>
                    <option value="design">Design</option>
                    <option value="industrieel">Industrieel</option>
                    <option value="bureauwerk">Bureauwerk</option>
                    <option value="verkoop">Verkoop</option>
                </select>



                <label for="jobbeschrijving"><br>Jobbeschrijving<br></label>
                <textarea name="jobbeschrijving" id="text" cols="70" rows="10"></textarea>

                <label for="vereiste"><br>Vereiste<br></label>
                <textarea name="vereiste" id="text" cols="70" rows="10"></textarea>

                <label for="kennis"><br>Kennis<br></label>
                <textarea name="kennis" id="text" cols="70" rows="10"></textarea>

                <label for="voordelen"><br>Voordelen<br></label>
                <textarea name="voordelen" id="text" cols="70" rows="10"></textarea>
                <br><br>
                <input type="submit" class="next-button" id="next-button" value="Vacature posten" name="next-button">
            </div>

            <div class="vacature-right">
                <div class="right-top">
                    <div class="salaris">
                        <label for="salaris"><br>Salaris per uur<br></label>  
                        <input type="text" id="text_salaris" name="salaris">                      
                    </div>

                    <div class="locatie">
                        <label for="locatie"><br>Locatie<br></label>
                        <input type="text" id="text_locatie" name="locatie">
                    </div>
                </div>

                <div class="right-bottom">
                    <div class="geldig_tot">
                        <label for="geldig_tot"><br>Geldig tot...<br></label>
                        <input type="date" id="geldig_tot" name="geldig_tot">
                    </div>
                    
                    <div class="level">
                        <label for="level"><br>Job Level:<br></label>
                        <input type="text" id="level" name="level">
                    </div>
                    
                    <div class="pro-div">
                        <label for="pro"><br>Pro vacature?<br></label>
                        <input type="checkbox" name="pro" id="pro">
                    </div>
                    
                    
                </div>
                
            </div>

        </div>
    </form>
</body>
</html>
