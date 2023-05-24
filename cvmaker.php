<?php
    include_once(__DIR__ . "/classes/Cv.php");

if(isset($_POST['cv-send'])){
    $cv = new Cv();
    $cv->setVoornaam($_POST['voornaam']);
    $cv->setAchternaam($_POST['achternaam']);
    $cv->setEmail($_POST['email']);
    $cv->setGeb_datum($_POST['geb_datum']);
    $cv->setStraatnaam($_POST['straat']);
    $cv->setGemeente($_POST['gemeente']);
    $cv->setTel_nr($_POST['telnr']);

    $cv->setOnderwijsinstelling($_POST['onderwijs']);
    $cv->setOpleiding($_POST['naam_opleiding']);
    $cv->setOpl_start($_POST['start_opl']);
    $cv->setOpl_einde($_POST['einde_opl']);
    $cv->setExtra_opleiding($_POST['extra1']);

    $cv->setFunctie($_POST['functie']);
    $cv->setWerkplaats($_POST['werk_plaats']);
    $cv->setWerk_start($_POST['start_werk']);
    $cv->setWerk_einde($_POST['einde_werk']);
    $cv->setWerkgever($_POST['werkgever']);
    $cv->setFunctieomschrijving($_POST['functieomschrijving']);
    $cv->setVrijwilliger($_POST['vrijwilligerswerk']);

    $cv->setComp_kennis($_POST['yes_no']);
    $cv->setOverige_prog($_POST['comp_overige']);
    $cv->setKan_prog($_POST['programmeren']);
    $cv->setProg_talen($_POST['prog_talen']);

    $cv->setSpreek_talen($_POST['talen']);
    $cv->setRijbewijs($_POST['rijbewijs']);
    $cv->setBesch_start($_POST['beschstart']);
    $cv->setBesch_einde($_POST['bescheinde']);
    $cv->setOverige($_POST['extra']);
    // :compkennis, :overigeprog, :kanprog, :progtalen
    $cv->insertCv();

    header("Location: cvtohome.php");
    
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
  <link rel="stylesheet" href="../Workz2/css/cvmaker.css">    <title>CSS Maker</title>
</head>


<body>
<?php include_once("/xampp/htdocs/php/Workz/compartments/header.php")?>
<form id="cv-form" action="" method="POST" aria-label="Cv form">
    <div class="cv-personal">
        <div class="cv-title">
            <div class="cv-name">
                <img id="pic" src="../Workz/images/profile.png" alt="">
                <h2 id="pic-title">Persoonlijke gegevens</h2>
            </div>
            <div class="arrows">
                <a href="#"><img id="min" src="../Workz/images/min.png" onclick="hideDivUno()"></a>
                <a href="#"><img id="plus" src="../Workz/images/plus.png" onclick="showDivUno()"></a>
            </div>
            <div id="cv-questions">

                <label for="filenaam"><br>Voeg een foto toe aan je CV<br></label>
                <input type="file" id="myFile" name="filename">

                <div class="row">
                    <div class="column">
                        <label for="voornaam"><br>Voornaam <br></label>
                        <input id="invoer" type="text" name="voornaam" id="voornaam" placeholder="Stefan">
                        
                        <label for="voornaam"><br>Email<br></label>
                        <input id="invoer" type="text" name="email" id="email" placeholder="voorbeeld@email.com">
                        
                        <label for="straat"><br>Straatnaam + Huis nummer<br></label>
                        <input id="invoer" type="text" name="straat" id="straat" placeholder="Straatstraat 50">
                    
                        <label for="telnr"><br>Telefoonnnummer<br></label>
                        <input id="invoer" type="text" name="telnr" id="telnr" placeholder="+32496698512">
                    
                    
                    </div>
                    
                    <div class="column">
                        <label for="achternaam"><br>Achternaam <br></label>
                        <input id="invoer" type="text" name="achternaam" id="achternaam" placeholder="de Steef">

                        <label for="geb_datum"><br>Geboortedatum<br></label>
                        <input id="invoer" type="date" id="geb_datum" name="geb_datum" min="1950-01-01" max="2015-12-31">
                    
                        <label form="gemeente"><br>Gemeente<br></label>
                        <input id="invoer" type="text" id="gemeente" name="gemeente" placeholder="Kuringen">
                    </div>
                </div>
                
                    
            </div>
        </div>
    </div>

    <div class="cv-school">
        <div class="cv-title">
            <div class="cv-name">
                <img id="pic" src="../Workz/images/education.png" alt="">
                <h2 id="pic-title">Opleiding(en)</h2>
            </div>
            <div class="arrows">
                <a href="#"><img id="min" src="../Workz/images/min.png" onclick="hideDivDos()"></a>
                <a href="#"><img id="plus" src="../Workz/images/plus.png" onclick="showDivDos()"></a>
            </div>
            <div id="cv-questions-dos">
                <div class="row">
                    <div class="column">
                        <label for="onderwijs"><br>Onderwijsstelling <br></label>
                        <input id="invoer" type="text" name="onderwijs" id="onderwijs">
                        
                        <label for="start_opl"><br>Van<br></label>
                        <input id="invoer" type="date" id="start_opl" name="start_opl" min="1950-01-01" max="2023-12-31">
                    </div>
                    
                    <div class="column">
                        <label for="naam_opleiding">Naam van opleiding <br></label>
                        <input id="invoer" type="text" name="naam_opleiding" id="naam_opleiding">

                        <label for="einde_opl"><br>Tot<br></label>
                        <input id="invoer" type="date" id="einde_opl" name="einde_opl" min="1950-01-01" max="2023-12-31">
                    </div>
                </div>
                <label for="extra1"><br>Extra Informatie<br></label>
                <textarea name="extra1" id="extra1" cols="30" rows="10"></textarea>
                    
            </div>
        </div>
    </div>

<div class="cv-work">
        <div class="cv-title">
            <div class="cv-name">
                <img id="pic" src="../Workz/images/work.png" alt="">
                <h2 id="pic-title">Werkervaring</h2>
            </div>
            <div class="arrows">
                <a href="#"><img id="min" src="../Workz/images/min.png" onclick="hideDivTres()"></a>
                <a href="#"><img id="plus" src="../Workz/images/plus.png" onclick="showDivTres()"></a>
            </div>
            <div id="cv-questions-tres">
                <div class="row">
                    <div class="column">
                        <label for="functie"><br>Functie <br></label>
                        <input id="invoer" type="text" name="functie" id="functie">
                        
                        <label for="start_werk"><br>Van<br></label>
                        <input id="invoer" type="date" id="start_werk" name="start_werk" min="1950-01-01" max="2023-12-31">
                    </div>
                    
                    <div class="column">
                        <label for="werk_plaats">Plaats<br></label>
                        <input id="invoer" type="text" name="werk_plaats" id="werk_plaats">

                        <label for="einde_werk"><br>Tot<br></label>
                        <input id="invoer" type="date" id="einde_werk" name="einde_werk" min="1950-01-01" max="2023-12-31">
                    </div>
                </div>
                <label for="werkgever"><br>Werkgever<br></label>
                <input id="invoer" type="text" name="werkgever" id="werkgever"> 
                
                <label for="functieomschrijving"><br>Functieomschrijving<br></label>
                <input id="invoer" type="text" name="functieomschrijving" id="functieomschrijving"> 
                
                <label for="vrijwilligerswerk"><br>Heb je vrijwilligerswerk gedaan? Zoja, waar?<br></label>
                <input id="invoer" type="text" name="vrijwilligerswerk" id="vrijwilligerswerk">

                    
            </div>
        </div>
    </div>

    <div class="cv-computer">
        <div class="cv-title">
            <div class="cv-name">
                <img id="pic" src="../Workz/images/laptop.png" alt="">
                <h2 id="pic-title">Computervaardigheden</h2>
            </div>
            <div class="arrows">
                <a href="#"><img id="min" src="../Workz/images/min.png" onclick="hideDivFour()"></a>
                <a href="#"><img id="plus" src="../Workz/images/plus.png" onclick="showDivFour()"></a>
            </div>
            <div id="cv-questions-four">
                <div class="row">
                    <div class="column">
                        <label for="yes_no"><br>Ik kan goed overweg met computers.<br></label>
                        <input id="yes" type="radio" name="yes_no" value="ja">Ja</input>
                        <input id="no" type="radio" name="yes_no" value="nee">Nee</input>

                        <label for="progammeren"><br>Ik kan programmeren.<br></label>
                        <input id="yes" type="radio" name="programmeren" value="ja">Ja</input>
                        <input id="no" type="radio" name="programmeren" value="nee">Neen</input>

                        <label for="prog_talen"><br>Welke progammeertalen kan je?<br></label>
                        <input id="invoer" type="text" name="prog_talen" id="prog_talen">
                    </div>
                    
                    <div class="column">
                        <label for="comp_overige">Welke overige programma's ben je goed in?<br></label>
                        <input id="invoer" type="text" name="comp_overige" id="comp_overige">
                    </div>
                </div>
            </div>


        </div>
    </div>

    <div class="cv-persoonlijk">
        <div class="cv-title">
            <div class="cv-name">
                <img id="pic" src="../Workz/images/persoonlijk.png" alt="">
                <h2 id="pic-title">Persoonlijke vaardigheden</h2>
            </div>
            <div class="arrows">
                <a href="#"><img id="min" src="../Workz/images/min.png" onclick="hideDivFive()"></a>
                <a href="#"><img id="plus" src="../Workz/images/plus.png" onclick="showDivFive()"></a>
            </div>
            <div id="cv-questions-five">
                <div class="row">
                    <div class="column">
                        <label for="talen"><br>Welke talen spreek je?<br></label>
                        <input id="invoer" id="talen" type="text" name="talen" >
                    </div>
                    
                    <div class="column">
                        <label for="rijbewijs">Heb je je rijbewijs?<br></label>
                        <input id="no" type="radio" name="rijbewijs" value="nee">Nee</input>
                        <input id="yes" type="radio" name="rijbewijs" value="ja">Ja</input>
                    </div>
                </div>
            </div>

            
        </div>
    </div>
    
    <div class="cv-beschikbaar">
        <div class="cv-title">
            <div class="cv-name">
                <img id="pic" src="../Workz/images/vector.png" alt="">
                <h2 id="pic-title">Beschikbaarheden</h2>
            </div>
            <div class="arrows">
                <a href="#"><img id="min" src="../Workz/images/min.png" onclick="hideDivSix()"></a>
                <a href="#"><img id="plus" src="../Workz/images/plus.png" onclick="showDivSix()"></a>
            </div>
            <div id="cv-questions-six">
                <div class="row">
                    <div class="column">
                        <label for="beschstart"><br>Vanaf wanneer ben je beschikbaar?<br></label>
                        <input id="invoer" type="date" id="beschstart" name="beschstart" min="2023-05-03" max="2025-12-31">
                    </div>
                    <div class="column">
                        <label for="bescheinde"><br>Tot en met wanneer ben je beschikbaar?<br></label>
                        <input id="invoer" type="date" id="bescheinde" name="bescheinde" min="2023-05-03" max="2025-12-31">
                    </div>
                       
                </div>
            </div>

            
        </div>
    </div>

        <div class="cv-extra">
        <div class="cv-title">
            <div class="cv-name">
                <img id="pic" src="../Workz/images/plus.png" alt="">
                <h2 id="pic-title">Extra's</h2>
            </div>
            <div class="arrows">
                <a href="#"><img id="min" src="../Workz/images/min.png" onclick="hideDivSeven()"></a>
                <a href="#"><img id="plus" src="../Workz/images/plus.png" onclick="showDivSeven()"></a>
            </div>
            <div id="cv-questions-seven">
                <div class="row">
                    <div class="column">
                        <label for="extra"><br>Wil je nog iets kwijt op je CV?<br></label>
                        <textarea name="extra" id="invoer extra" cols="30" rows="10"></textarea>
                    </div>
                       
                </div>
            </div>
        </div>
    </div>    
    <div id="button-center">
        <input type="submit" class="submit-button" id="next-button" value="Volgende stap" name="cv-send">
    </div>
</form>

<?php include_once("/xampp/htdocs/php/Workz/compartments/footer.php")?>

</body>
<script>
    

    // één
    function hideDivUno() {
        document.getElementById('cv-questions').style.display = "none";
        console.log('hide');
        event.preventDefault();
    }
    function showDivUno() {
        document.getElementById('cv-questions').style.display = "block";
        console.log('show');
        event.preventDefault();
    }
    // twee
    function hideDivDos() {
        document.getElementById('cv-questions-dos').style.display = "none";
        console.log('hide');
        event.preventDefault();
    }
    function showDivDos() {
        document.getElementById('cv-questions-dos').style.display = "block";
        console.log('show');
        event.preventDefault();
    }
    // drie
    function hideDivTres() {
        document.getElementById('cv-questions-tres').style.display = "none";
        console.log('hide');
        event.preventDefault();
    }
    function showDivTres() {
        document.getElementById('cv-questions-tres').style.display = "block";
        console.log('show');
        event.preventDefault();
    }
    // vier
    function hideDivFour() {
        document.getElementById('cv-questions-four').style.display = "none";
        console.log('hide');
        event.preventDefault();
    }
    function showDivFour() {
        document.getElementById('cv-questions-four').style.display = "block";
        console.log('show');
        event.preventDefault();
    }
    // vijf
    function hideDivFive() {
        document.getElementById('cv-questions-five').style.display = "none";
        console.log('hide');
        event.preventDefault();
    }
    function showDivFive() {
        document.getElementById('cv-questions-five').style.display = "block";
        console.log('show');
        event.preventDefault();
    }
    // zes
    function hideDivSix() {
        document.getElementById('cv-questions-six').style.display = "none";
        console.log('hide');
        event.preventDefault();
    }
    function showDivSix() {
        document.getElementById('cv-questions-six').style.display = "block";
        console.log('show');
        event.preventDefault();
    }
    // zeven
    function hideDivSeven() {
        document.getElementById('cv-questions-seven').style.display = "none";
        console.log('hide');
        event.preventDefault();
    }
    function showDivSeven() {
        document.getElementById('cv-questions-seven').style.display = "block";
        console.log('show');
        event.preventDefault();
    }

    //onload
    window.onload = function(){
        document.getElementById("cv-questions-four").style.display = "none";
        document.getElementById("cv-questions-five").style.display = "none";
        document.getElementById("cv-questions-six").style.display = "none";
        document.getElementById("cv-questions-seven").style.display = "none";
    }

    
</script>
</html>